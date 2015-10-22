<?php

use Blog\Post\Post;
use Blog\Transformers\PostTransformer;

class PostsController extends \BaseController 
{
	private $lessonTransformer;

	public function __construct(PostTransformer $lessonTransformer)
	{
		$this->lessonTransformer = $lessonTransformer;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return Response::json([
			'data' => $this->lessonTransformer->transformCollection($posts->toArray())
		]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		echo 'store';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if (! $post) {
			return Response::json([
				'error' => [
					'message' => 'Post not found'
				]
			], 404);
		}

		return Response::json([
			'data' => $this->lessonTransformer->transform($post)
		], 200);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
