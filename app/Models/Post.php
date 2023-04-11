<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Post\PostStatusEnum;
use App\States\Post\PostState;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    /**
     * @return Attribute<string, never>
     */
    protected function statusColor(): Attribute
    {
        return Attribute::make(
            get: fn () => (new PostState($this))->statusColor(),
        );
    }
}
