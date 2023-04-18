<?php

declare(strict_types=1);

namespace App\Models;

use App\EloquentBuilders\Post\PostBuilder;
use App\Enums\Post\PostStatusEnum;
use App\States\Post\PostState;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Query\Builder;

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
     * @return BelongsToMany<Tag>
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @param  Builder  $query
     * @return PostBuilder<Model>
     */
    public function newEloquentBuilder($query): PostBuilder
    {
        return new PostBuilder($query);
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
