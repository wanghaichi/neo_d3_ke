<?php
namespace App\Models;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

/**
 * Class Clazz
 * @package App\Models
 * @property string name
 * @property string file
 * @property string content_md5
 * @property string path_signature
 * @property string create_commit
 * @property string package_name
 */
class Clazz extends NeoEloquent{
    protected $label = 'class';

    protected $fillable = ['name', 'file', 'content_md5', 'path_signature', 'create_commit', 'package_name'];
}