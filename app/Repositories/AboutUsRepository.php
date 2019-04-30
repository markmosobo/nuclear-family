<?php

namespace App\Repositories;

use App\Models\AboutUs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AboutUsRepository
 * @package App\Repositories
 * @version April 30, 2019, 3:49 pm EAT
 *
 * @method AboutUs findWithoutFail($id, $columns = ['*'])
 * @method AboutUs find($id, $columns = ['*'])
 * @method AboutUs first($columns = ['*'])
*/
class AboutUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'background',
        'body',
        'conclusion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AboutUs::class;
    }
}
