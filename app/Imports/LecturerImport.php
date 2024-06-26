<?php

namespace App\Imports;

use App\Models\Lecturer;
use Maatwebsite\Excel\Concerns\ToModel;

class LecturerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lecturer([
            'id' => $row[0],
            'nidn' => $row[1],
            'name' => $row[2]
        ]);
    }
}
