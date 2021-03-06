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
        return view('bicicletas.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return $this->bicicleta->create($request->all());
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
        return $this->bicicleta->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->bicicleta->destroy($id);
    }
}
