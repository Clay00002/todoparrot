<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ListsController extends Controller {

	/**
	 * Display list/index.html
	 *
	 * @return view list/index.html
	 */
	public function getindex()
	{
		// return list index
		return view('list.index');
	}

	/**
	 * Display list/create.html
	 *
	 * @return view list/create.html
	 */
	public function getcreate()
	{
		// retuen list create
		return view('list.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function poststore()
	{
		// post list store
		return view('list.store');
	}


}
