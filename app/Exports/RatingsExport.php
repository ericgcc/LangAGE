<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class RatingsExport implements  WithMultipleSheets
{
    public function sheets(): array{
        $sheets = [];
        $questions = [1, 2, 3];

        foreach ($questions as $question)
            $sheets[] = new SheetExport($question);

        return $sheets;
    }
}
