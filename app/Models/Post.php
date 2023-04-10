<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\Post\PostStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'content',
        'user_id',
    ];

    protected $casts = [
        'status' => PostStatusEnum::class,
    ];

    /**
     * @return BelongsTo<User, Post>
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }
}
