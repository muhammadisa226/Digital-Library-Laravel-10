<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdminBooksExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::all('id','title', 'amount','description');
    }
    public function headings(): array
    {
        return [
            'id',
            'title',
            'jumlah',
            'description'
        ];
    }
}
