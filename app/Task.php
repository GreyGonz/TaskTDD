<?php
/**
 * Created by PhpStorm.
 * User: grey
 * Date: 17/10/17
 * Time: 21:58
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
        'name','user_id'
    ];
}