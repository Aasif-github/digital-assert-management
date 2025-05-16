<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_type',
        'mime_type',
        'file_extension',
        'file_size',
        'file_url',
        'uploaded_by',
        'project_id'
    ];

    
    // Media belongs to a user
    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    // Media optionally belongs to a project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
