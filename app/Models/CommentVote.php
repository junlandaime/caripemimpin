<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentVote extends Model
{
    use HasFactory;

    protected $fillable = ['comment_id', 'ip_address'];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
