<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        '_type',
        'type',
        'citation_key',
        'author',
        'title',
        'journal',
        'year',
        'doi',
        'art_number',
        'note',
        'url',
        'document_type',
        'source',


    ];  
}
