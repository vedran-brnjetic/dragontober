<?php namespace VedranBrnjetic\Dragonbase\Models;

use Model;

/**
 * Model
 */
class DragonFamily extends Model
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
    public $table = 'vedranbrnjetic_dragonbase_dragon_family';

    /**
     * Relations
     */

    public $belongsTo = [
	'dragon_class' => 'VedranBrnjetic\Dragonbase\Models\DragonClass'
    ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
