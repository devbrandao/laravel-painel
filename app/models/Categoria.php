<?php

class Categoria extends Eloquent {

	protected $table = 'categoria';

	public $rules = array(
		'titulo' => 'required'
	);

	public $timestamps = false;

	public function parent()
    {
        return $this->hasOne('Categoria', 'categoria_pai', 'id');
    }

}