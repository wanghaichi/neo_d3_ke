<?php
namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;
/**
 * Class Api
 * @package App\Models
 * @property int id
 * @property string name
 *
 */
class Api extends NeoEloquent{
    protected $connection = 'neo4j';
    protected $label = 'API';
    protected $fillable = ['name'];
}