<?php

class Score extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'value' => 'required',
		'points' => 'required'
	);
}
