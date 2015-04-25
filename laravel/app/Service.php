<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Service extends Model {

	protected $table = 'services';

	protected $fillable = ['category_id','name','price','time'];

}
