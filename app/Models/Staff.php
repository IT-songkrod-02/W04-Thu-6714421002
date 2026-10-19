<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [
        'title_id',
        'organization_id',
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}