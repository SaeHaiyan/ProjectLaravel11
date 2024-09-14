<?php 

namespace App\Models;

use Illuminate\Support\Arr;


class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Topic 1',
                'author' => 'Haiyan Hazrin',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Vel at totam aut consectetur dicta eaque nam, velit tempore 
                        itaque exercitationem commodi vero, accusamus eveniet eum autem 
                        enim quod veniam placeat. Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Asperiores laudantium voluptates, nihil consequatur 
                        at ipsam, vitae magni necessitatibus voluptate tempora quas eaque! 
                        Debitis aliquam, eligendi voluptates deleniti porro sapiente quibusdam?'
            ],
            [
                'id' => 2,
                'title' => 'Topic 2',
                'author' => 'Khairil Mizwan',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Culpa, architecto vel repudiandae veritatis qui consectetur 
                        doloribus assumenda impedit voluptatum ducimus saepe temporibus. 
                        Minus aut delectus cupiditate rem repudiandae enim reiciendis.'
            ],
            [
                'id'=> 3,
                'title' => 'Topic 3',
                'author' => 'Muhd Nur Faiz',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Numquam unde eveniet, pariatur quia nobis magnam corrupti 
                        provident alias, similique eligendi veritatis, natus quasi 
                        nam ea veniam enim! Ipsam, inventore voluptatibus?'
            ],
        ];
    }

    public static function find($id): array
    {
        //return Arr::first(static::all(), function ($post) use ($id){
        //    return $post['id'] == $id;
        //});

        return Arr::first(static::all(), fn($post) => $post['id'] == $id);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}