<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showRegistrationForm() {
        
        
        return view ('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    
        if ($data['role'] === 'cliente') {
            Cliente::create(['user_id' => $user->id]);
        } elseif ($data['role'] === 'administrador') {
            Administrador::create(['user_id' => $user->id]);
        }
    
        return $user;    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
