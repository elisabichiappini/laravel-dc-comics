<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;
    // 2 method to update edit con fillable, abilita tutti i campi per update per i campi title, type e series
    // protected $fillable = ['title', 'type', 'series'];
    // 2 method to update edit con guarded, non abilita i campi indicati in array, quindi se tutti può essere lasciato vuoto
    protected $guarded = [];
}
