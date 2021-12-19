<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoImage extends Model
{
    use HasFactory;
    
    protected $table = 'empleado_image';
    
    public $timestamps = false;
    
    protected $fillable = ['idempleado', 'caption', 'filename', 'mimetype', ];
    
    //protected $attributes = [];
    
    public function empleado() {
        return $this->belongsTo('App\Models\Empleado', 'idempleado');
    }
}
