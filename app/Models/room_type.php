<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_type extends Model
{
    use HasFactory;
    protected $table = 'room_type';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','bed_qty','price','price_agent','facilities','total_room'];
    
    public static function selectAll(){
        $result = DB::select('select * from room_type');
        return $result;
    }
    public static function selectForDisplay(){
        $rooms = [
            [
                "room_name" => "Standard",
                "slug" => "Standard",
                "room_desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab animi aperiam voluptatum autem quae exercitationem, debitis eius maxime tenetur nobis voluptatem quia doloremque consequatur aliquam quibusdam delectus, molestiae enim saepe. Nulla harum dicta explicabo fugit odio asperiores, sunt saepe et libero velit, nam sapiente aperiam a! In aspernatur similique rem consectetur nobis atque sit dolor, et officia necessitatibus velit consequuntur. Cupiditate, officiis temporibus? Eum, accusantium quos rerum voluptates, veritatis libero a vero assumenda qui ullam obcaecati doloremque ea nisi non."
            ],
            [
                "room_name" => "Superior",
                "slug" => "Superior",
                "room_desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab animi aperiam voluptatum autem quae exercitationem, debitis eius maxime tenetur nobis voluptatem quia doloremque consequatur aliquam quibusdam delectus, molestiae enim saepe. Nulla harum dicta explicabo fugit odio asperiores, sunt saepe et libero velit, nam sapiente aperiam a! In aspernatur similique rem consectetur nobis atque sit dolor, et officia necessitatibus velit consequuntur. Cupiditate, officiis temporibus? Eum, accusantium quos rerum voluptates, veritatis libero a vero assumenda qui ullam obcaecati doloremque ea nisi non."
            ]
        ];
    
        $result = DB::select('select name,facilities from room_type');
        // $result = collect($result);
        // dd($result);
        return $result;
    }
}
