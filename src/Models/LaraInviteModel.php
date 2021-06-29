<?php

namespace Junaidnasir\Larainvite\Models;

use Illuminate\Database\Eloquent\Model;

class LaraInviteModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_invitations';

    protected $fillable = ['email'];
    
    /**
     * Referral User
     */
    public function user()
    {
        return $this->belongsTo(config('larainvite.UserModel'));
    }

    public function getIpAttribute()
    {
        return $this->email;
    }
}
