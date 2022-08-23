<?php
 
namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID; 
use Illuminate\Database\Eloquent\Model;

 
class paciente extends Model
{
    use HasUUID;
  
    protected $table = 'pacientes';
    protected $primaryKey = 'id_pc';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $uuidFieldName = 'id_pc';


}