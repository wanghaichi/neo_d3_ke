<?php
namespace App\Models;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;
/**
 * Class File
 * @package App\Models
 * @property string name
 * @property string path
 * @property string content
 * @property string content_md5
 * @property string type
 * @property string create_commit
 */
class File extends NeoEloquent{
    protected $label = 'File';
    protected $fillable = [
        'name',
        'path',
        'content',
        'content_md5',
        'type',
        'create_commit'
    ];
}