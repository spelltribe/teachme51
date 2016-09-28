<?php

namespace TeachMe\Entities;


class Ticket extends Entity
{
    //
    protected $fillable = ['title','status'];

    public function author()
    {
        return $this->belongsTo(User::getClass(),'user_id');
    }

    public function getOpenAttribute()
    {
        return $this->status == 'open';
    }

    public function comments()
    {
        return $this->hasMany(TicketComment::getClass());
    }

    public function voters()
    {
        // OBtener los votantes de un ticket

        // Relación muchos a muchos
        return $this->belongsToMany(User::getClass(),'ticket_votes');
    }

}
