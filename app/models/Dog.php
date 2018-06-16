<?php


namespace Puppers;

use Illuminate\Database\Eloquent\Model;

class Pup extends Model {

	public $timestamps = false;
	protected $hidden = array();
	protected $fillable = ['name', 'age', 'breed'];

}

?>