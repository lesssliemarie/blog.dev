<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		// Run an authentication filter before all methods except index and show
		$this->beforeFilter('auth', array('except' => array('index', 'show')));

		$this->beforeFilter('post.protect', array('only' => array('edit', 'update', 'destroy');

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');
		if (is_null($search)) {
			$posts = $query->paginate(4);		
		} else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(4);
		}
		// return 'GET, Shows list of all posts';	
		return View::make('posts.index')->with('posts', $posts);		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return 'GET, Shows form for creating posts';
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create validator
		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Post save unsuccessful. See form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			Log::info(Input::all());

			// saves to DB
			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Post saved successfully.');

			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// return 'GET, Shows a specific post';
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// return 'GET, Shows form for editing a specific post';
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		// create validator
		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Post save unsuccessful. See form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			Log::info(Input::all());

			// saves to DB
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('successMessage', 'Post saved successfully.');

			return Redirect::action('PostsController@show', $post->id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// return 'DELETE, Deletes a specific post';
		Post::findOrFail($id)->delete();
		if (Post::find($id)) {
			Session::flash('errorMessage', 'Post delete unsuccessful.');
		} else {
			Session::flash('successMessage', 'Post deleted successfully.');
			return Redirect::action('PostsController@index');
		}
	}

}