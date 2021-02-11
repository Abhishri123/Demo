<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use DataTables;

class TableController extends Controller
{
    public function index()
    {
        return view('table');
    }
  
    public function getArticles(Request $request)
    {
        if ($request->ajax()) {
            return $data = Article::latest()->get();

            // return Datatables::of($data);
                // ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                //     return $actionBtn;
                // })
                // ->rawColumns(['action'])
                // ->make(true);
        }
    }
}

