<?php

namespace App\Http\Controllers;

use App\Licence;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevendeursController extends Controller
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
            $revendeurs = User::where('role', 'revendeur')->onlyTrashed()->get();
            return view('revendeurs.trash', compact('revendeurs'));
        }else{
            $revendeurs = User::where('role', 'revendeur')->get();
            return view('revendeurs.index', compact('revendeurs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revendeurs.create');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->except(['_token', 'password_confirmation']);
        $data['role'] = 'revendeur';
        $data['password'] = bcrypt($data['password']);
        $revendeur = User::create($data);
        return redirect()->route('revendeurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revendeur = User::where('role', 'revendeur')->where('id', $id)->first();
        return view('revendeurs.edit', compact('revendeur'));
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'confirmed',
        ]);

        $data = $request->only(['name', 'description', 'adresse', 'code_postal', 'ville', 'email']);
        if (!empty($request->password) && $request->password == $request->password_confirmation) {
            $data['password'] = bcrypt($request->password);
        }
        User::where('id', $id)->update($data);
        return redirect()->route('revendeurs.index');
    }


    public function restore(Request $request, $id)
    {
        if (csrf_token() == $request->token && Auth::user()->role == 'admin') {
            User::withTrashed()
                ->where('id', $id)
                ->restore();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('role', 'revendeur')->where('id', $id)->delete();
        return redirect()->route('revendeurs.index');
    }
}
