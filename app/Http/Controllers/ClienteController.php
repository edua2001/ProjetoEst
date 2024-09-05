<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //04/09  alterado
    //public function __construct(){

       // $this->middleware(Middleware:'can:level');
    //}


    public function index()
    {
        return view('clientes.index',[
            'clientes'=> Cliente::orderBy('nome')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->user_id        = $request->user_id;

        $cliente->nome           = $request->user_id;

        $cliente->email          = $request->email;

        $cliente->telefone       = $request->telefone;

        $cliente->empresa        =  $request->empresa;

        $cliente->tel_comercial  =  $request->tel_comercial;

        $cliente->save();

        return redirect()->route('cliente.create')->with('msg','Cliente cadastrado com, sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
