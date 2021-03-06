<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow, WithChunkReading, WithBatchInserts
{

    public $section;

    public function __construct($section)
    {
        $this->section = $section;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $serial_number = trim($row['alrkm_altslsly']);
        $name    = trim($row['alasm']);
        $status  = trim($row['odaa_altalb']);
        $path    = trim($row['almsar']);

        if(!is_null($serial_number) && !is_null($name) && !is_null($status) && !is_null($path)){

            Student::query()->updateOrCreate([
                'serial_number' => $serial_number,
                'section' => $this->section,
                ],
                [
                'name'    => $name,
                'status'  => $status == 'منتظم' ? '1' : '0',
                'path'    => $path,
            ]);

        }
    }

    public function batchSize(): int
    {
        return 300;
    }

    public function chunkSize(): int
    {
        return 300;
    }

}
