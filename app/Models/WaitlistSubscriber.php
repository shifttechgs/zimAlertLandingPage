<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitlistSubscriber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'source',
        'ip_address',
        'user_agent',
        'subscribed_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];

    /**
     * Check if the subscriber is currently subscribed.
     *
     * @return bool
     */
    public function isSubscribed(): bool
    {
        return $this->unsubscribed_at === null;
    }

    /**
     * Mark the email as verified.
     *
     * @return bool
     */
    public function verify(): bool
    {
        $this->email_verified_at = now();
        return $this->save();
    }

    /**
     * Unsubscribe the user from the waitlist.
     *
     * @return bool
     */
    public function unsubscribe(): bool
    {
        $this->unsubscribed_at = now();
        return $this->save();
    }
}
