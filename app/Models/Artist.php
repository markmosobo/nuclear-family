<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Artist
 * @package App\Models
 * @version April 29, 2019, 11:22 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string artist_name
 * @property string art_type
 * @property string media
 * @property string about_artist
 */
class Artist extends Model
{
    use SoftDeletes;

    public $table = 'artists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'artist_name',
        'art_type',
        'media',
        'about_artist'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'artist_name' => 'string',
        'art_type' => 'string',
        'media' => 'string',
        'about_artist' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
