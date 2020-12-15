<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'Site';
    protected $primaryKey = 'site_id';
    protected $guarded = array('site_id');
    public static $rules = array(
        'site_name' => 'required',
        'site_url' => 'required'
    );
}
