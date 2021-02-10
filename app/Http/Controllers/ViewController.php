<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use Maatwebsite\Excel\Facades\Excel;
use RenanBr\BibTexParser\Listener;
use RenanBr\BibTexParser\Parser;
use RenanBr\BibTexParser\Processor;
use App\Exports\FilesExport;
// use SoapBox\Formatter\Formatter;



class ViewController extends Controller {
    public function createForm(){
        return view('export-file');
      }
public function index(){

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
          print_r($entries);
    }
    
        function html_table($entries = array())
      {
    $rows = array();
    foreach ($entries as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";

    }
return "<table border='1' 
<th>   </th>
<th>_Type</th>
<th>Type</th> 
<th>Citation-key</th>
<th>Author</th>
<th>Title</th>
<th>Journal</th>
<th>Year</th>
<th>Volume</th>
<th>Doi</th>
<th>Art number</th>
<th>Note</th>
<th>Url</th>
<th>Document Type</th>
<th>Source</th> " . implode('', $rows) . "</table>";

}
echo html_table($entries);

}  

 function exportFile(Request $request) {
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
           return Excel::download($entries, 'articleData.xlsx');
        // $entries = Article::create();

        // DB::table('articles')->insert([
        //     '_type' => $entries->_type,
        //     'type' => $entries->type,
        //     'citation_key' => $entries->citation_key,
        //     'author' => $entries->author,
        //     'title' => $entries->title,
        //     'journal' => $entries->journal,
        //     'year' => $entries->year,
        //     'doi' => $entries->doi,
        //     'art_number' => $entries->art_number,
        //     'note' => $entries->note,
        //     'url' => $entries->url,
        //     'document_type' => $entries->document_type,
        //     'source' => $entries->source,

        // ]);
        // //   $formatter = Formatter::make($entries, Formatter::ARR);
        //   $csv   = $formatter->toCsv();
        //   $xml   = $formatter->toXml();
          
  }
 }
 

 }


      

    
   


    
