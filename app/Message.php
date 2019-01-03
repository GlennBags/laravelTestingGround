<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['body'];
    protected $appends = ['selfMessage'];

    /**
     * User belongs to a Message
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Determine if the message is sent from the signed in user
     * @return bool
     */
    public function isSelfMessage()
    {
        return $this->user_id === auth()->user()->id;
    }
}
