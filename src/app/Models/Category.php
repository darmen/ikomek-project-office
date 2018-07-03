<?php

namespace Darmen\IKomekProjectOffice\app\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'ikomek-project-office-category';
    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany('Darmen\IKomekProjectOffice\app\Models\Project');
    }
}
