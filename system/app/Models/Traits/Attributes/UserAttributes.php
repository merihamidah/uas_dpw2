<?php
namespace App\Models\Traits\Attributes;

trait UserAttributes{    
    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki-laki":"Perempuan";
    }

}