<?php

namespace App\Exports;

use App\Models\Marketing;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MarketingsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Marketing::all();
    }

    public function map($marketing): array 
    {
        return [
            $marketing->id,
            $marketing->branch,
            $marketing->item,
            $marketing->purpose,
            $marketing->requestor,
            $marketing->quantity,
            $marketing->date_received,
            $marketing->status
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Branch',
            'Item',
            'Purpose',
            'Requestor',
            'Quantity',
            'Date Received',
            'Status',
        ];
    }

}
