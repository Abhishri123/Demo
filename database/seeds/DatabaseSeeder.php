<?php
namespace App\Article;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RenanBr\BibTexParser\Listener;
use RenanBr\BibTexParser\Parser;
use RenanBr\BibTexParser\Processor;
use App\Exports\FilesExport;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
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
    
    $entries = Article::create();


    foreach (range(1,200) as $index) {
        DB::table('articles')->insert([
            '_type' => $entries->_type,
            'type' => $entries->type,
            'citation_key' => $entries->citation_key,
            'author' => $entries->author,
            'title' => $entries->title,
            'journal' => $entries->journal,
            'year' => $entries->year,
            'doi' => $entries->doi,
            'art_number' => $entries->art_number,
            'note' => $entries->note,
            'url' => $entries->url,
            'document_type' => $entries->document_type,
            'source' => $entries->source,

        ]);
    }
}
        // $this->call(UserSeeder::class);
    }
}
