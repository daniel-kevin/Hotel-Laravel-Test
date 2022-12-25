<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','room_type_id','number'];
    // private static $rooms = [
    //     [
    //         "room_name" => "Standard",
    //         "slug" => "Standard",
    //         "room_desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab animi aperiam voluptatum autem quae exercitationem, debitis eius maxime tenetur nobis voluptatem quia doloremque consequatur aliquam quibusdam delectus, molestiae enim saepe. Nulla harum dicta explicabo fugit odio asperiores, sunt saepe et libero velit, nam sapiente aperiam a! In aspernatur similique rem consectetur nobis atque sit dolor, et officia necessitatibus velit consequuntur. Cupiditate, officiis temporibus? Eum, accusantium quos rerum voluptates, veritatis libero a vero assumenda qui ullam obcaecati doloremque ea nisi non."
    //     ],
    //     [
    //         "room_name" => "Superior",
    //         "slug" => "Superior",
    //         "room_desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab animi aperiam voluptatum autem quae exercitationem, debitis eius maxime tenetur nobis voluptatem quia doloremque consequatur aliquam quibusdam delectus, molestiae enim saepe. Nulla harum dicta explicabo fugit odio asperiores, sunt saepe et libero velit, nam sapiente aperiam a! In aspernatur similique rem consectetur nobis atque sit dolor, et officia necessitatibus velit consequuntur. Cupiditate, officiis temporibus? Eum, accusantium quos rerum voluptates, veritatis libero a vero assumenda qui ullam obcaecati doloremque ea nisi non."
    //     ]
    // ];

    public static function allRooms(){
        return collect(room_type::selectForDisplay());
    }
    public static function getRoomAccordingToSlug($name){
        return static::allRooms()->firstWhere('name',$name);
    }
}
