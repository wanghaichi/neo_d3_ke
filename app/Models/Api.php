<?php
namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

/**
 * Class Api
 * @package App\Models
 * @property string name
 */
class Api extends NeoEloquent{
    protected $label = 'Api';
    protected $fillable = ['name'];
}