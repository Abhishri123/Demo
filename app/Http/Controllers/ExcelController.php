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
        return Excel::download(new FilesExport,'file.xlsx');
    }
}
   
// public function ExcelExport(){

//     $articles = DB::select('select * from files');
//     foreach ($articles as $article) {
//         $file = Storage::disk('local')->get('public/uploads/1612372173_scopus.bib');
//         $listener  = new Listener();
//         $listener->addProcessor(new Processor\TagNameCaseProcessor(CASE_LOWER));
//         $parser = new Parser();
//         $parser->addListener($listener);
//         $parser->parseString($file);
//         $entries = $listener->export();
//          echo "<pre>";
//         //   print_r($entries);
//     }
