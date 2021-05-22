<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Application
 * @package App
 */
class Application extends Model
{
    protected $table = "applications";
    protected $fillable = [
        'user_id', 'body', 'region', 'type', 'image', 'school_name'
    ];

    // Override

    /**
     * @return Builder
     */
    public static function query(): Builder
    {
        return parent::query();
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
