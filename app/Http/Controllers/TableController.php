<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\Article;
use DataTables;
use Auth;
class TableController extends Controller
{
//     public function __construct()
// {
//     $this->middleware('auth');
// }

    // public function index()
    // {
    //     $articles = Article::get();

    //     return view('table', compact('articles'));
    //     // $articles = DB::select('select * from articles');
    //     // return view('table_view',['articles'=>$articles]);
 
    //     // return view('table');
    // }
    // public function index()
    // {
    //     $articles = DB::select('select * from articles');
    //     return view('table',['articles'=>$articles]);
    
    //  }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Article::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('table');
    }
}
  
    // public function getArticles(Request $request)
    // {
    //     if ($request->ajax()) {
    //         return $data = Article::latest()->get();

    //          return Datatables::of($data);
    //             // ->addIndexColumn()
    //             // ->addColumn('action', function($row){
    //             //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //             //     return $actionBtn;
    //             // })
    //             // ->rawColumns(['action'])
    //             // ->make(true);
    //     }
    // }


