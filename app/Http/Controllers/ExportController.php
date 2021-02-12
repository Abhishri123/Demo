<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\TableExport;

class ExportController extends Controller
{
    public function index(TableExport $dataTable)
    {
     return $dataTable->render('table');
    }
}
