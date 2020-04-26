<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
 protected $fillable=['title','body'];
//question belongs to user
 public function user(){
 	//this means question belogs to user
 	return $this->belongsTo(User::class);

 }  
public function setTitleAttribute($value)
{
	$this->attribute['title']= $value;
	$this->attribute['slug']= Str::slug($value);
}
