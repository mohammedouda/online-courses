<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class Trainers extends Controller
{
//
    function exportData()
    {
        return Excel::download(new DataExport, 'trainers.xlsx') ;
    }
}
class DataExport implements FromCollection
{

    function collection()
    {
        return Trainer::all() ;
    }
}

