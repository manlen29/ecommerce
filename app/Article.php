<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;
	
	# if you didn't follow the naming convention of laravel use the table name below
    // protected $table = 'tablename';
    
	protected $fillable = [
		'user_id', 'content', 'live', 'post_on'	
	];
	
	protected $dates = ['post_on', 'deleted_at'];
	
	#dont include on the mass create 
	//protected $guarded = ['id'];
	
	public function setLiveAttribute($value)
	{
		$this->attributes['live'] = (boolean)($value);
	}
	
	public function getShortContentAttribute()
	{
		return substr($this->content, 0, random_int(60, 150)) . '...';
	}
	
	public function setPostOnAttribute($value)
	{
		$this->attributes['post_on'] = Carbon::parse($value);
	}
}
