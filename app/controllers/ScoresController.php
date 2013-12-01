<?php

class ScoresController extends BaseController {

	/**
	 * Score Repository
	 *
	 * @var Score
	 */
	protected $score;

	public function __construct(Score $score)
	{
		$this->score = $score;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$scores = $this->score->all();

		return View::make('scores.index', compact('scores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('scores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Score::$rules);

		if ($validation->passes())
		{
			$this->score->create($input);

			return Redirect::route('scores.index');
		}

		return Redirect::route('scores.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$score = $this->score->findOrFail($id);

		return View::make('scores.show', compact('score'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$score = $this->score->find($id);

		if (is_null($score))
		{
			return Redirect::route('scores.index');
		}

		return View::make('scores.edit', compact('score'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Score::$rules);

		if ($validation->passes())
		{
			$score = $this->score->find($id);
			$score->update($input);

			return Redirect::route('scores.show', $id);
		}

		return Redirect::route('scores.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->score->find($id)->delete();

		return Redirect::route('scores.index');
	}

}
