<?php
 
 namespace App\Http\Controllers\v1;
 
 use App\Http\Controllers\Controller;
 use App\Models\Paciente;
 use Illuminate\Http\Request;
 
class pacientesController extends Controller
{
      public function getAll()

    {
      $response = new \stdClass();

      $pacientes = paciente::all();

      $response->success=true;
      $response->data= $pacientes;

      return response()->json($response,200);
    }

    public function getItem($id_pc)
    {
      $response = new \stdClass();

      $pacientes = paciente::find($id_pc);

      $response->data= $pacientes;
      $response->success=true;
      return response()->json($response,200);
    }


      public function store (Request $request)
    {
      $response = new \stdClass();

      $paciente = new paciente();

      $paciente->nombre=$request->nombre;
      $paciente->apellido=$request->apellido;
      $paciente->sexo=$request->sexo;
      $paciente->birth=$request->birth;
      $paciente->dni=$request->dni;
      $paciente->save();

      $response->data= $paciente;
      $response->success=true;

      return response()->json($response,200);
    }


    public function update(Request $request,$id_pc)
    {
      $response = new \stdClass();

      $paciente = paciente::find($id_pc);
      $paciente->nombre=$request->nombre;
      $paciente->apellido=$request->apellido;
      $paciente->sexo=$request->sexo;
      $paciente->birth=$request->birth;
      $paciente->dni=$request->dni;
      $paciente->save();

      $response->data= $paciente;
      $response->success=true;
      
       return response()->json($response,200);

    }

    public function PatchUpdate(Request $request,$id_pc)
    {
      $response = new \stdClass();
      $paciente = paciente::find($id_pc);

      if($request->nombre!=null)
      {
          $paciente->nombre=$request->nombre;
      }
      if($request->apellido!=null)
      {
         $paciente->apellido=$request->apellido;
      }
      if($request->sexo!=null)
      {
          $paciente->sexo=$request->sexo;
      }
      if($request->birth!=null)
      {
          $paciente->birth=$request->birth;
      }
      if($request->dni!=null)
      {
          $paciente->dni=$request->dni;
      }
      
      $paciente->save();
      
      $response->data = $paciente;
      $response->success=true;
     
      return response()->json($response,200);
    }
    public function delete($id)
    {
      $response = new \stdClass();
      $paciente = paciente::find($id_pc);
      $paciente->delete();

      $response->success=true;
      return response()->json($response,200);
    }
}