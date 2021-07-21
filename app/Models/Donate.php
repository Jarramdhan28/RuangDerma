<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    public function index()
    { 
    $donates = Donate::all();
    
    return response()->json([
        'donates' => $donates
    ]); 
    }
}
