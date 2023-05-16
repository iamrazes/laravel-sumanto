<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPegawai = User::all();
        return view('admin.management.apegawai.index', compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.management.apegawai.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $user = User::create([
            'name' => $request -> name,
            'nohp' => $request -> nohp,
            'email' => $request -> email,
            'password' => bcrypt($request -> password),
        ]);
        $user->assignRole($request->roles);


        return redirect()->route('apegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dtPegawai = User::find($id);
        $roles = Role::all();
        //$dtPegawai->assignRole($request->roles);
        return view('admin.management.apegawai.edit', compact('dtPegawai', 'roles'));

        //dd($dtPegawai);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dtPegawai = User::findOrFail($id);
        $roles = Role::all();
        $dtPegawai->update([
            'name' => $request->name,
            'role' => $request->role,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $dtPegawai->syncRoles($request->roles);

        return redirect()->route('apegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dtPegawai = User::findOrFail($id);
        $dtPegawai->delete();

        return redirect()->route('apegawai')->with('status', 'Data has been removed!');
    }
}
