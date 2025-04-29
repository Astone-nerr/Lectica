<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function files(): BelongsToMany
    {
        return $this->belongsToMany(File::class, 'file_tag', 'tag_id', 'file_id');
    }
}
