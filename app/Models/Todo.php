<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        "title","completed","user_id","description"
    ];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return "id";
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function step() {
        return $this->hasMany(Step::class);
    }
}
