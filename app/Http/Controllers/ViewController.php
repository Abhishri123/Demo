<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use RenanBr\BibTexParser\Listener;
use RenanBr\BibTexParser\Parser;
use RenanBr\BibTexParser\Processor;

class ViewController extends Controller {
public function index(){
//     $articles = DB::select('select * from files');
// return view('view',['articles'=>$articles]);


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
        //  foreach ($entries as $entry) {

        //             return view('view',['entries'=>$entries]);
        //      }
       print_r("<table border='1'>
       <tr>
     <th>Id</th>
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
<th>Source</th>
       </tr>
       <tr>
       <td></td>
       </tr>
              </table>");

    }
    
   }
}
    
