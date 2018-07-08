<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qanswer extends Model
{
    protected $fillable = [

    	'qid',
    	'optdesc',
    	'isans'
    ];
}
