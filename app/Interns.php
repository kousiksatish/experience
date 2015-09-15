<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Interns extends Model
{
    //

    protected $table = 'interns';
    public $timestamps  = false;
    
    public static function columns(){
    		$table_cols = 'interns_cols';
    		return DB::table($table_cols)->get();
    }

    public static function no_of_columns() {

    }
}
