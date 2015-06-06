<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

use Redirect;
use View;
use Mail;
use \DB;

use App\Program;

class HomesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$programs = [];

		$programs = Program::all();
		// $programs = json_encode($programs);

		return View::make('homes.index')->with('programs', $programs);
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
		$data = Request::all();

		$program = DB::table('programs')->where('slug', $data['slug'])->first();

		$data['title'] = ['title' => $program->title];
		$data = array_merge($data, $data['title']);
		// dd($data);

		Mail::send('emails.inquire', $data, function($message) use ($data, $program)
		{
			$message->from($data['email'], $data['name']);
			$message->to('andreas@sapioweb.com')->subject($program->title);
		});

		return Redirect::route('program.show', ['slug' => $program->slug)->with('success_message', 'Your message has been successfully sent');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$program = DB::table('programs')->where('slug', $slug)->first();
		// dd($program->id);

		return View::make('homes.show')->with('program', $program);
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
