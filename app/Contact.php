<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'Contact';
    protected $primaryKey = 'opinion_id';
    protected $guarded = array('opinion_id');
    public static $rules = array(
        'opinioncontent' => 'required'
    );
}
