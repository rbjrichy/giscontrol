<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class HojaExcelImport implements WithMultipleSheets
{
    private $nameHoja;
    private $encuesta_id;
    function __construct($hoja, $encuesta_id)
    {
        $this->nameHoja = $hoja;
        $this->encuesta_id = $encuesta_id;
    }
    public function sheets(): array
    {
        return [
            $this->nameHoja => new EncuestasExcelImport($this->encuesta_id),
            // 'Worksheet 2' => new SecondSheetImport(),
        ];
    }
}
