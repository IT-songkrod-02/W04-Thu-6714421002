<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title',
        'description',
        'organization_id',
        'community_id',
        'activity_date',
        'budget'
    ];

    // เชื่อมตาราง Activity เข้ากับ Organization
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    // เชื่อมตาราง Activity เข้ากับ Community
    public function community()
    {
        return $this->belongsTo(Community::class);
    }
}