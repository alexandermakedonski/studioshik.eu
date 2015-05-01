<?php namespace App;

use Validator;

class ServiceCategory extends \Kalnoy\Nestedset\Node {

	protected $table = 'servicecategories';

	protected $fillable = ['name','parent_id'];

	const LFT = '_lft';

    const RGT = '_rgt';

    const PARENT_ID = 'parent_id';

    protected $guarded = [ 'lft', 'rgt' ];

    // To allow mass asignment on parent attribute
    public function setParentAttribute($value)
    {
        $this->setParentIdAttribute($value);
    }

}
