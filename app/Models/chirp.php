<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class chirp extends Model
{
    use HasFactory;
    public function user()
    {

        return $this->belongsTo(User::class);
    }
}