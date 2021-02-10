<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use RenanBr\BibTexParser\Listener;
use RenanBr\BibTexParser\Parser;
use RenanBr\BibTexParser\Processor;
class BladeExport implements FromCollection 
{   
    public function collection()
    {
        $articles = DB::select('select * from files');
        foreach ($articles as $article) {
            $file = Storage::disk('local')->get('public/uploads/1612372173_scopus.bib');
            $listener  = new Listener();
            $listener->addProcessor(new Processor\TagNameCaseProcessor(CASE_LOWER));
            $parser = new Parser();
            $parser->addListener($listener);
            $parser->parseString($file);
            $entries = $listener->export();
             echo "<pre>";
            //   print_r($entries);
        }
return DB::all();
    }
    // public function view(): View
    // {
    //     return view('exports.xml', [
    //         'data' => [
    //           [
    //             'name' => 'Povilas',
    //             'surname' => 'Korop',
    //             'email' => 'povilas@laraveldaily.com',
    //             'twitter' => '@povilaskorop'
    //           ],
    //           [
    //             'name' => 'Taylor',
    //             'surname' => 'Otwell',
    //             'email' => 'taylor@laravel.com',
    //             'twitter' => '@taylorotwell'
    //           ]
    //         ]
    //     ]);
    //     return view('exports.xml', [
    //         'data' => $this->data
    //     ]);
    // }
    // private $data;

    // public function __construct($data)
    // {
    //     $this->data = $data;
    // }
    
}