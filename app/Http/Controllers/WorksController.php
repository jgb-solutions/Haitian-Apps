<?php

namespace App\Http\Controllers;

use App\Models\Work;

use Illuminate\Http\Request;

class WorksController extends Controller
{
	public function index()
	{
		return view('works.index', [
			'title' => 'Toutes les Équipes',
         'works' => Work::latest()->paginate(20)
		]);
	}

	public function show(Work $work)
	{
		return view('works.show', [
			'title' => 'Toutes les Équipes',
         'work' => $work
		]);
	}
}
