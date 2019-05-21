<?php
namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

/**
 * Class Commit
 * @package App\Models
 * @property string name
 * @property string developer
 * @property int time
 * @property string message
 * @property string type
 */
class Commit extends NeoEloquent{
    protected $label = 'Commit';
    protected $fillable = [
        'name',
        'developer',
        'time',
        'message',
        'type'
    ];
}