<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Observers\JobObserver;

class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'starting_date' ,
        'Expiry_date' ,
        'contact_email',
        'country',
        'City',
        'image'
    ];

    public static function boot()
    {
        parent::boot();

        self::observe(new JobObserver);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
