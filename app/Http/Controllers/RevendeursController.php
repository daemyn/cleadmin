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
    public function index()
    {
        $revendeurs = User::where('role', 'revendeur')->get();
        return view('revendeurs.index', compact('revendeurs'));
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
     * @param  \Illuminate\Http\Request  $request
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function licences(){
        $licences = Licence::where('user_id', Auth::user()->id)->orderBy('etat')->orderBy('updated_at', 'DESC')->get();
        return view('revendeurs.licences', compact('licences'));
    }
}
