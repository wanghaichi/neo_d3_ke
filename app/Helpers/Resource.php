<?php


namespace App\Helpers;


use App\Models\Api;
use App\Models\Branch;
use App\Models\Clazz;
use App\Models\Commit;
use App\Models\File;
use App\Models\Method;

class Resource
{
    public static function Api(Api $api) :array {
        return [
            'id' => $api->id,
            'labels' => [$api->getLabel()],
            'properties' => [
                'name' => $api->name
            ]
        ];
    }

    public static function Branch(Branch $branch) :array {
        return [
            'id' => $branch->id,
            'labels' => [$branch->getLabel()],
            'properties' => [
                'name' => $branch->name
            ]
        ];
    }

    public static function Clazz(Clazz $clazz) :array {
        return [
            'id' => $clazz->id,
            'labels' => [$clazz->getLabel()],
            'properties' => [
                'name' => $clazz->name,
                'file' => $clazz->file,
                'content_md5' => $clazz->content_md5,
                'path_signature' => $clazz->path_signature,
                'create_commit' => $clazz->create_commit,
                'package_name' => $clazz->package_name
            ]
        ];
    }

    public static function Commit(Commit $commit) :array {
        return [
            'id' => $commit->id,
            'labels' => [$commit->getLabel()],
            'properties' => [
                'name' => $commit->name,
                'developer' => $commit->developer,
                'time' => $commit->time,
                'message' => $commit->message,
                'type' => $commit->type
            ]
        ];
    }

    public static function File(File $file) :array {
        return [
            'id' => $file->id,
            'labels' => [$file->getLabel()],
            'properties' => [
                'name' => $file->name,
                'path' => $file->path,
                'content' => $file->content,
                'content_md5' => $file->content_md5,
                'type' => $file->type,
                'create_commit' => $file->create_commit
            ]
        ];
    }

    public static function Method(Method $method) :array {
        return [
            'id' => $method->id,
            'labels' => [$method->getLabel()],
            'properties' => [
                'name' => $method->name,
                'body' => $method->body,
                'content_md5' => $method->content_md5,
                'class' => $method->class,
                'file' => $method->file,
                'path_signature' => $method->path_signature,
                'create_commit' => $method->create_commit
            ]
        ];
    }

    public static function Relationship($id, $type, $node1, $node2){
        return [
            'id' => $id,
            'type' => $type,
            'startNode' => $node1->id,
            'endNode'   => $node2->id,
            'properties' => [

            ]
        ];
    }

}