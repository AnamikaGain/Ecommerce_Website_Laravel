<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable =['parent_id','name','description','url','status'];

    public function childs() {
        return $this->hasMany('App\category','parent_id','id') ;
    }
}
