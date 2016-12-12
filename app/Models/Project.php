<?php
/**
 * Created by PhpStorm.
 * User: proteux3
 * Date: 12/2/16
 * Time: 7:22 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}