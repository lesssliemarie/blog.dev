<?php

class Post extends BaseModel {

    protected $table = 'posts';

    public static $rules = array(
    	'title' => 'required|max:100',
    	'body' => 'required|max:10000',
    	'image' => 'max:1000'
    );

	/*
	*Relationship for belongsTo user
	*/
    public function user()
	{
	    return $this->belongsTo('User');
	}

}