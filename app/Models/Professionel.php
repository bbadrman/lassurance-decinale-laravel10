<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionel extends Model
{
    protected $table = 'lassurance-garantie-decennal';
    public $timestamps = false;
    protected $connection = 'mysql';
}
