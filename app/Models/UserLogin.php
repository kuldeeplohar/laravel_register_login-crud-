<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password'
    ];
    public function processData($data)
    {
        dd($data);

       // return $processedData;
    }
}
