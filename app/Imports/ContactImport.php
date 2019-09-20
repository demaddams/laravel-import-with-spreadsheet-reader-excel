<?php

namespace App\Imports;

use App\Contact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ContactImport implements ToArray, WithChunkReading, WithHeadingRow, ShouldQueue
{

    /**
     * @param array $array
     */
    public function array(array $array)
    {
        Contact::insert($array);
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 10000;
    }

    public function headingRow(): int
    {
        return 1;

    }

}
