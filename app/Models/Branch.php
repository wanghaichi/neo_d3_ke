<?php
namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

/**
 * Class Branch
 * @package App\Models
 * @property int id
 * @property string name
 */
class Branch extends NeoEloquent{
    protected $label = 'Branch';
    protected $fillable = ['name'];


    public function commits()
    {
        return $this->hasMany(Commit::class, 'BranchtoCommit');
    }
}