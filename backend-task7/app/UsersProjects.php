<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProjects extends Model
{
    public function projects()
    {
    	return $this->hasOne('App\Projects');
    }
}
