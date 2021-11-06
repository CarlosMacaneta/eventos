<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'date',
        'time'
    ];

    public function getGuests()
    {
        $guests = Guest::where('event_id', $this->id)->paginate(3);

        return compact('guests');
    }
}
