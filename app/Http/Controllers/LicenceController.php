<?php

namespace App\Http\Controllers;

use App\Licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $trash = $request->get('trash');
        if ($trash && $trash == 1 && Auth::user()->role == 'admin') {
            $licences = Licence::with('revendeur')->onlyTrashed()->orderBy('etat')->orderBy('updated_at', 'DESC')->get();
            return view('licences.trash', compact('licences'));
        } else {
            if (Auth::user()->role == 'admin') {
                $licences = Licence::with('revendeur')->orderBy('etat')->orderBy('updated_at', 'DESC')->get();
                return view('licences.index', compact('licences'));
            } else {
                $licences = Licence::where('user_id', Auth::user()->id)->orderBy('etat')->orderBy('updated_at', 'DESC')->get();
                return view('revendeurs.licences', compact('licences'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Licence::class);
        return view('licences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'siret' => 'required|unique:licences'
        ]);
        $user = Auth::user();
        $data = $request->only(['enseigne', 'siret','code_naf','numero_tva','telephone','adresse','code_postal','ville','pays','nombre_postes', 'duree_utilisation', 'site']);

        $data['licence'] = strtoupper(str_random(8));
        while (Licence::where('licence', $data['licence'])->count() > 0) {
            $data['licence'] = strtoupper(str_random(8));
        }
        $data['duree_utilisation'] = (empty($data['duree_utilisation'])) ? NULL : $data['duree_utilisation'];
        $data['code_licence'] = strtoupper(str_random(8));
        $data['user_id'] = $user->id;
        if ($user->role == 'admin') {
            $data['etat'] = 1;
        }

        $licence = Licence::create($data);

        if ($user->role != 'admin') {
            \Mail::send('emails.new_licence', compact('user', 'licence'), function ($m) use ($licence) {
                $m->from('noreply@klikx.lol', 'Klikx');
                $m->to('licences@klikx.lol')->subject('Demande de Licence n°' . $licence->id);
                //$m->to('aymenlabidi88@gmail.com')->subject('Demande de Licence n°' . $licence->id);
            });
        }

        // SEND DATA TO SYNC APP
        $url = 'http://37.59.49.137:8888/accounts';
        $ch = curl_init($url);
        $jsonData = array(
            'license' => $licence->licence,
            'password' => $licence->code_licence
        );
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        // End sending data


        return redirect()->route('licences.show', $licence);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $licence = Licence::find($id);
        $this->authorize('view', $licence);
        return view('licences.show', compact('licence'));
    }

    public function confirmer(Request $request, $id)
    {
        $licence = Licence::find($id);
        $revendeur = $licence->revendeur;
        if (csrf_token() == $request->token && Auth::user()->role == 'admin' && $licence) {
            $licence->update(['etat' => 1]);
            if($revendeur){
                \Mail::send('emails.confirmation_licence', compact('licence'), function ($m) use ($revendeur, $licence) {
                    $m->from('noreply@klikx.lol', 'Klikx');
                    $m->to($revendeur->email)->subject('Confirmation de la licence n°' . $licence->id);
                });
            }
        }
        return redirect()->back();
    }

    public function restore(Request $request, $id)
    {
        if (csrf_token() == $request->token && Auth::user()->role == 'admin') {
            Licence::withTrashed()
                ->where('id', $id)
                ->restore();
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $licence = Licence::find($id);
        $this->authorize('update', $licence);
        return view('licences.edit', compact('licence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'siret' => 'required|unique:licences,siret,' . $id
        ]);

        $licence = Licence::find($id);
        $this->authorize('update', $licence);

        $data = $request->only(['enseigne', 'siret','code_naf','numero_tva','telephone','adresse','code_postal','ville','pays','nombre_postes', 'duree_utilisation', 'site']);

        $data['duree_utilisation'] = (empty($data['duree_utilisation'])) ? NULL : $data['duree_utilisation'];
        $data['code_licence'] = strtoupper(str_random(8));
        $licence->update($data);
        return redirect()->route('licences.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Licence::where('id', $id)->delete();
        return redirect()->route('licences.index');
    }
}
