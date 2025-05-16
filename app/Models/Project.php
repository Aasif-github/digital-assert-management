<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_long_description',
        'project_short_description',
        'language',
        'year_of_publish',
        'created_by'
    ];

    //  A project belongs to a user
    //  public function creator()
    //  {
    //      return $this->belongsTo(User::class, 'created_by');
    //  }
 
    //  // A project has many media files
    //  public function mediaFiles()
    //  {
    //      return $this->hasMany(MediaFile::class);
    //  }
}
