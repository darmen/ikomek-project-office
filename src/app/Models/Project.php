<?php

namespace Darmen\IKomekProjectOffice\app\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'ikomek-project-office-project';
    protected $dates = [
        'created_at',
        'updated_at',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'images' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo('Darmen\IKomekProjectOffice\app\Models\Category');
    }
}
