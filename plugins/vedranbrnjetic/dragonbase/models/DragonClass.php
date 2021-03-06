<?php namespace VedranBrnjetic\Dragonbase\Models;

use Model;

/**
 * Model
 */
class DragonClass extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vedranbrnjetic_dragonbase_dragon_class';

    public $hasMany = [
	'dragon_families' => 'VedranBrnjetic\Dragonbase\Models\DragonFamily'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
