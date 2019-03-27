<?php namespace VedranBrnjetic\Dragonbase\Models;

use Model;

/**
 * Model
 */
class DragonType extends Model
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
    public $table = 'vedranbrnjetic_dragonbase_dragon_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
