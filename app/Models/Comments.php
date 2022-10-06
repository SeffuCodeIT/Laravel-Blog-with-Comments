<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];

    /**
     * Write Your Code..
     *
     * @return string
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Write Your Code..
     *
     * @return string
     */
    public function replies()
    {
        return $this->hasMany(Comments::class, 'parent_id');
    }
}
