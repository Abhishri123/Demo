<?php

namespace App\Exports;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use RenanBr\BibTexParser\Listener;
use RenanBr\BibTexParser\Parser;
use RenanBr\BibTexParser\Processor;
use App\Article;
 use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromArray;


class FilesExport implements FromCollection
{
    // protected $entries;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
          return Article::all();
        // $articles = DB::select('select * from files');
        // foreach ($articles as $article) {
        //     $file = Storage::disk('local')->get('public/uploads/1612372173_scopus.bib');
        //     $listener  = new Listener();
        //     $listener->addProcessor(new Processor\TagNameCaseProcessor(CASE_LOWER));
        //     $parser = new Parser();
        //     $parser->addListener($listener);
        //     $parser->parseString($file);
        //     $entries = $listener->export();
        //      echo "<pre>";
        //     //   print_r($entries);
        // }
        
    //    return File::all();   
     }
    //  public function __construct(array $entries)
    // {
    //     $this->entries = $entries;
    // }

    // public function array(): array
    // {
    //     return $this->entries;
    // }
    }

