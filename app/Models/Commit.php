<?php
namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

/**
 * Class Commit
 * @package App\Models
 * @property int id
 * @property string name
 * @property string developer
 * @property int time
 * @property string message
 * @property string type
 */
class Commit extends NeoEloquent{
    protected $connection = 'neo4j';
    protected $label = 'Commit';
    protected $fillable = [
        'name',
        'developer',
        'time',
        'message',
        'type'
    ];

    public function commit(){
        return $this->hasOne(Commit::class, 'CommittoCommit', null, 'nCommit');
    }

    public function files(){
        return $this->hasMany(File::class, 'CommittoFile');
    }

}