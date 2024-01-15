<?php

namespace App\Exports;

use App\Models\Idea;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IdeaExport implements WithHeadings, FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      //  return Idea::all();
        $query_data = Idea::select(
            'id',
            'title',
            'description',
            'status_id',
            'category_id',
            'created_at')->get();
        return $query_data;
    }
    public function headings(): array
    {
        return [
            'id',
            'Title',
            'Descriptions',
            'status_id',
            'category_id',
            'Published Date'
        ];
    }
}

