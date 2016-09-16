<?php

namespace TeachMe\Entities;


class Ticket extends Entity
{
    //

    public function author()
    {
        return $this->belongsTo(User::getClass());
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
