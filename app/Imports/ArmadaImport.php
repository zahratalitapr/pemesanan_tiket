<?php

namespace App\Imports;

use App\Models\Armada;
use Maatwebsite\Excel\Concerns\ToModel;
// kalau ada password
// use Illuminate\Support\Facades\Hash;

class ArmadaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Armada([
            //
            'jenis_armada' => $row[1],
            'nama_armada' => $row[2],
            'kapasitas' => $row[3]
        ]);
    }
}
