<?php
/**
 * Created by PhpStorm.
 * User: kuehn_000
 * Date: 01.08.2018
 * Time: 17:56
 */

namespace App\DatabaseModels;

use Illuminate\Database\Eloquent\Model;

class MVPUser extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mvp_user';
    protected $primaryKey = 'id';
}