<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simage extends Model
{
    protected $table = "simages";

    protected $fillable = [
      'name',
      'title',
      'subtitle'
    ];
}
