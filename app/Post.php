<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Post
 * @package App
 * @property string $title
 * @property string $body
 * @property int $user_id
 * @property string $status
 * @property-read User $user
 */
class Post extends Model
{
    const STATUS_PENDING = 'pending';
    const STATUS_OK = 'ok';

    protected $fillable = [
        'title',
        'body',
        'status',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
