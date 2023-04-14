<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Tag\TagColourEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'colour',
    ];

    protected $casts = [
        'colour' => TagColourEnum::class,
    ];

    /**
     * @return BelongsToMany<Post>
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
