<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserBooksExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::select("id","title","amount","description")->where('user_id', auth()->user()->id)->get();
    }
    public function headings(): array
    {
        return [
            'id',
            'title',
            'amount',
            'description'
        ];
    }
}
