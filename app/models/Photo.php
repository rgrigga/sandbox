<?php

class Photo extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'link' => 'required',
		'photo' => 'required'
	);
}
