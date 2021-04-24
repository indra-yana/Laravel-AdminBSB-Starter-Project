<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Utils;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static $logName = 'users.log';
    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = ['password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];
    protected static $logOnlyDirty = true;

    public function tapActivity(Activity $activity, string $eventName) {
        $activity->description  = ":causer.name $eventName " .Utils::splitCamelCase( Utils::str_after_last("\\", $activity->subject_type) ) .": :subject.name";
        $activity->properties = $activity->properties->put('ip_address', request()->ip());
    }

    public function branch() {
        return $this->belongsToMany(\App\Models\Branch::class, 'users_branches', 'id_user', 'id_branch')->withTimestamps();
    }

}
