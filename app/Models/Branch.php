<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Utils;

class Branch extends Model
{
    use SoftDeletes, LogsActivity;

    protected $table = 'branches';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['name', 'code', 'description', 'time_zone'];

    protected static $logName = 'branches.log';
    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = ['created_at', 'updated_at', 'deleted_at'];
    protected static $logOnlyDirty = true;

    public function tapActivity(Activity $activity, string $eventName) {
        $activity->description  = ":causer.name $eventName " .Utils::splitCamelCase( Utils::str_after_last("\\", $activity->subject_type) ) .": :subject.name";
        $activity->properties = $activity->properties->put('ip_address', request()->ip());
    }

    public function user() {
        return $this->belongsToMany(\App\User::class, 'users_branches', 'id_branch', 'id_user')->withTimestamps();
    }

}
