<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Question extends Model
{
 protected $fillable = ['title','body'];
//question belongs to user
 public function user(){
 	//this means question belogs to user
 	return $this->belongsTo(User::class);

 }  
public function setTitleAttribute($value)
{
	$this->attributes['title']= $value;
	$this->attributes['slug']= Str::slug($value);
	  // $this->attributes['slug'] = str_slug($value);
}
}