<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content'
    ];

    public static function validateInputData() 
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
    }

    public static function getInputData()
    {
        return [
            'title' => request('title'),
            'content' => request('content')
        ];
    }

    public static function showResponseStatus($success)
    {
        return [
            'success' => $success
        ];
    }

    
}
