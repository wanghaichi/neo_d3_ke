<?php
namespace App\Models;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

/**
 * Class Method
 * @package App\Models
 * @property string name
 * @property string body
 * @property string content_md5
 * @property string class
 * @property string file
 * @property string path_signature
 * @property string create_commit
 */
class Method extends NeoEloquent{
    protected $label = 'method';
    protected $fillable = [
        'name',
        'body',
        'content_md5',
        'class',
        'file',
        'path_signature',
        'create_commit'
    ];
}