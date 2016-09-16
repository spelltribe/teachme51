<?php
/**
 * Created by PhpStorm.
 * User: niceso
 * Date: 16/09/16
 * Time: 12:36
 */

namespace TeachMe\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{

    public static function getClass(){
        return get_class(new static);
    }
}