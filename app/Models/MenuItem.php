<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function parent()
    {
        return $this->belongsTo('App\Models\MenuItem', 'parent_id');
    }

    public function child()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }

    public function children()
	{
	   return $this->child()->with('children');
	}
}
