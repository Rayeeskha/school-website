<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['title', 'description'];

    public function getTitleAttribute()
    {
        return $this->attributes[session()->get('locale') == 'ur' ? 'title_ur' : 'title'];
    }

    public function getDescriptionAttribute()
    {
        return $this->attributes[session()->get('locale') == 'ur' ? 'description_ur' : 'description'];
    }
}
