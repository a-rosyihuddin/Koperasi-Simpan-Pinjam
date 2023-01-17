<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View(
            'pegawai.pegawai',
            [
                'title' => 'Data Pegawai',
                'pegawai' => User::where([['username', '!=', 'admin'], ['status', '1']])->orderBy('id', 'DESC')->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View(
            'pegawai.tambah-pegawai',
            [
                'title' => 'Tambah Pegawai',
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->nama_pegawai);
        User::create([
            'nama_pegawai' => $request->nama_pegawai,
        ]);
        return redirect(Route('pegawai.index'));
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
        return View(
            'pegawai.edit-pegawai',
            [
                'title' => 'Edit Pegawai',
                'pegawai' => User::find($id)
            ]
        );
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
        // dd(User::find($id);
        User::where('id', $id)->update(['nama_pegawai' => $request->nama_pegawai]);
        return redirect(Route('pegawai.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->update(['status' => '0']);
        return redirect(Route('pegawai.index'));
    }
}
