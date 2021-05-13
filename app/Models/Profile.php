<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function profileImage(){
        $imagePath = ($this->image) ?  $this->image : 'profile/wUlqJJ7arHH4GEndY8JVAwG5FsU3SRonyYmOhWfh.png';
        return '/storage/' . $imagePath;
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
