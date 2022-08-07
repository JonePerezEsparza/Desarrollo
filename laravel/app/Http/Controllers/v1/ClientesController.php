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
      $response->data=$cliente;
      $response->success=true;
      return response()->json($response,200);
    }


      public function store (Request $resquest)
    {
      $response = new \stdClass ();

      $cliente = new cliente();
      $cliente->codigo=$request->codigo;
      $cliente->nombre=$request->nombre;
      $cliente->save();

      $response->data=$cliente;
      $response->success=true;

      return response()->json($response,200);
    }


    public function updatePut(Request $resquest,$id)
    {
      $response = new \stdClass();

      $cliente = cliente::find($id);
      $cliente->codigo=$request->codigo;
      $cliente->nombre=$request->nombre;
      $cliente->descripcion=$request->descripcion;
      $cliente->save();

      $response->data=$cliente;
      $response->success=true;
      
       return response()->json($response,200);

    }

    public function updatePatch(Request $request,$id)
    {
      $response = new \stdClass();
      $cliente = cliente::find($id);

      if($request->codigo!=null) 
      {
          $cliente->codigo = $request->codigo;
      }

      if($request->nombre!=null)
      {
          $cliente->nombre=$request->nombre;
      }
      if($request->descripcion!=null)
      {
         $cliente->descripcion=$request->descripcion;
      }

      $cliente->save();
      
      $response->data = $cliente;
      $response->success=true;
     
      return response()->json($response,200);
    }
    public function delete($id)
    {
      $response = new \stdClass();
      $cliente = cliente::find($id);
      $cliente->delete();

      $response->success=true;
      return response()->json($response,200);
    }
}