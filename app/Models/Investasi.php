<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    use HasFactory;

    protected $table = 'investasis';
    protected $primaryKey = 'id';
    protected $fillable = ['pv', 'i', 'n', 'future_value'];
}