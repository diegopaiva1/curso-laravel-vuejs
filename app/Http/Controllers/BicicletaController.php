<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BicicletaRepository as Bicicleta;

class BicicletaController extends Controller
{
    private $bicicleta;

    public function __construct(Bicicleta $bicicleta)
    {
        $this->bicicleta = $bicicleta;
    }
    
    public function index()
    {
        return $this->bicicleta->all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
