<?php

namespace App\Repositories;

use App\Models\Artist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArtistRepository
 * @package App\Repositories
 * @version April 29, 2019, 11:22 am EAT
 *
 * @method Artist findWithoutFail($id, $columns = ['*'])
 * @method Artist find($id, $columns = ['*'])
 * @method Artist first($columns = ['*'])
*/
class ArtistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'artist_name',
        'art_type',
        'media',
        'about_artist'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Artist::class;
    }
}
