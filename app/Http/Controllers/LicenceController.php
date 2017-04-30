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
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $licences = Licence::orderBy('etat')->orderBy('updated_at', 'DESC')->get();
            return view('licences.index', compact('licences'));
        } else {
            $licences = Licence::where('user_id', Auth::user()->id)->orderBy('etat')->orderBy('updated_at', 'DESC')->get();
            return view('revendeurs.licences', compact('licences'));
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
        $data = $request->only(['enseigne', 'siret', 'nombre_postes', 'duree_utilisation']);
        $data['licence'] = strtoupper(str_random(8));
        while (Licence::where('licence', $data['licence'])->count() > 0) {
            $data['licence'] = strtoupper(str_random(8));
        }
        $data['duree_utilisation'] = (empty($data['duree_utilisation'])) ? NULL : $data['duree_utilisation'];
        $data['code_licence'] = strtoupper(str_random(8));
        $data['user_id'] = Auth::user()->id;
        Licence::create($data);
        return redirect()->route('licences.index');
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

    public function confirmer($id)
    {
        Licence::where('id', $id)->update(['etat' => 1]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
