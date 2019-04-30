<?php

namespace App\Repositories;

use App\Models\Blog;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlogRepository
 * @package App\Repositories
 * @version April 30, 2019, 3:30 pm EAT
 *
 * @method Blog findWithoutFail($id, $columns = ['*'])
 * @method Blog find($id, $columns = ['*'])
 * @method Blog first($columns = ['*'])
*/
class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'date',
        'time',
        'image_path',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Blog::class;
    }
}
