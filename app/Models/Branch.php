<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;
    /**
     * branch table field
     * @var array
     */
    protected $fillable = [
        'name', 'lat', 'long','address','phone','status','open_time','close_time','close_day'
    ];

    /**
     * branch user relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany(User::class , 'branch_user','branch_id','user_id');
    }

}
