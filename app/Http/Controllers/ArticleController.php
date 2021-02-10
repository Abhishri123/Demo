<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\Article;
use Maatwebsite\Excel\Facades\Excel;
use RenanBr\BibTexParser\Listener;
use RenanBr\BibTexParser\Parser;
use RenanBr\BibTexParser\Processor;
use App\Exports\FilesExport;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected function create(Request $request)
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
        //  print_r($entries);
         foreach($entries as $entries)
         {
            print_r($entries);

        DB::table('articles')->insert([

     '_type' => $entries['_type'],
        'type' => $entries['type'],
        'citation_key' => $entries['citation-key'],
        'author' => $entries['author'],
        'title' => $entries['title'],
        'journal' => $entries['journal'],
        'year' => $entries['year'],
        'doi' => $entries['doi'],
        'art_number' => isset($entries['art_number'])?$entries['art_number']:'',
        'note' => $entries['note'],
        'url' => $entries['url'],
        'document_type' => $entries['document_type'],
        'source' => $entries['source'],

    ]);
}
    }

}

}
