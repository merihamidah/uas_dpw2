<?php 
namespace App\Models;
Use App\Models\Desa;
Use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model{
    protected $table = 'kecamatan';
    
    function desa(){
        return $this->hasMany(Desa::class, 'id_kecamatan');
    }
    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
    }
}