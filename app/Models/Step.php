<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ["name", "todo_id"];

    public function todo() {
        return $this->belongsTo(Todo::class);
    }
}
