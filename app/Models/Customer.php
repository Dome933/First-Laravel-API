<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email'
    ];

    public static function validateInputData() 
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
    }

    public static function getInputData()
    {
        return [
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email')
        ];
    }

    public static function showResponseStatus($success)
    {
        return [
            'success' => $success
        ];
    }
}
