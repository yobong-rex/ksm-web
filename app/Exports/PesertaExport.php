<?php

namespace App\Exports;

use App\Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PesertaExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function headings(): array
    {
        return [
            'No',
            'acara',
            'Nama',
            'NRP',
            'Email',
            'Jurusan',
            'No HP',
            'Waktu Daftar'
        ];
    }

    public function __construct(int $id)
    {
        $this->acaras_id = $id;
    }

    public function query()
    {
        return Peserta::query()->where('acaras_id', $this->acaras_id);
    }
}