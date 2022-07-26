<?php
 
namespace App\Http\Controllers\v1;

use App\Models\cliente;
use App\Http\Controllers\Controller;
 
class ClientesController extends Controller
{
      public function getAll()

    {
      $response = new \stdClass();
      $clientes = cliente::all();

      $response->success=true;
      $response->data=$clientes;

      return response()->json($response,200);
    }

    public function getItem($id)
    {
      $response = new \stdClass();

      $cliente = cliente::find($id);
      $response->success=true;
      $response->data=$categoria;

      response()->json($response,200);
    }


      public function store (Request $resquest)
    {
      $response = new \stdClass ();

      $cliente = new cliente();

      $cliente->codigo=$request->codigo;
      $cliente->nombre=$request->nombre;
      $cliente->save();

      $response->success=true;
      $response->data=$cliente;

      return response()-json($response,200);
    }
    public function updatePut(Request $resquest,$id)
    {
      $response = new \stdClass();
      $cliente = cliente::find($id)

      $cliente->codigo = $reques->codigo;
      $cliente->nombre=$request->nombre;
      $cliente->descripcion=$request->descripcion;
      $cliente->save();

      $response->succes=true;
      $response->data=$cliente;

      return response()-json($response,200);

    }
    public function updatePatch(Request $request,$id)
    {
      $response = new \stdClass();
      $cliente = cliente::find($id)

      if($request->codigo)  
        $cliente->codigo = $reques->codigo;
      if
      $cliente->nombre=$request->nombre;
      if
      $cliente->descripcion=$request->descripcion;
    
      $cliente->save();

      $response->succes=true;
      $response->data=$cliente;

      return response()-json($response,200);
    }
}