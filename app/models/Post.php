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

    public static function uploadImage($image)
    {
        $uniquePath = str_random(8);
        $destinationPath = public_path() . '/uploads/' . $uniquePath . '/';
        // get image name
        $fileName = $image->getClientOriginalName();
        // move file to path
        $image->move($destinationPath, $fileName);
        // create full path for DB
        $fullPath = '/uploads/' . $uniquePath . '/' . $fileName;
        // save image path to DB
        return $fullPath;
    }

}