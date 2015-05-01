<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

	public $timestamps = false;
    /**
     * @var array
     *
     * Fileds for provider.
     */
    protected $fillable = [
        'name',
        'copyright_email'
    ];

}
