<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    public $table = 'tournaments';

    public function participant()
    {
        return $this->belongsTo(Participant::class, 'participant_id');
    }
	
	public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
	
}
