<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Exports\FilesExport;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new FilesExport,'articles.xlsx');
    }
}
   
