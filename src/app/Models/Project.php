<?php

namespace Darmen\IKomekProjectOffice\app\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'ikomek-project-office-project';

    public function category()
    {
        return $this->belongsTo('Darmen\IKomekProjectOffice\app\Models\Category');
    }
}
