<?php namespace Travis\Carousel\Models;

use Model;

/**
 * Model
 */
class Carousel extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'travis_carousel_collections';

    /**
     * @var array Attach Many relation
     */
    public $attachMany = [
      'images' => ['System\Models\File', 'order' => 'sort_order'],
    ];
}