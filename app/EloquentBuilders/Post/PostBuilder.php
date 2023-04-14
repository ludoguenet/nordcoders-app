<?php

declare(strict_types=1);

namespace App\EloquentBuilders\Post;

use App\Enums\Post\PostStatusEnum;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;

/**
 * @template TModelClass of \Illuminate\Database\Eloquent\Model
 *
 * @extends Builder<Post>
 */
final class PostBuilder extends Builder
{
    /**
     * @return PostBuilder<\Illuminate\Database\Eloquent\Model>
     */
    public function published(): self
    {
        return $this->where('status', PostStatusEnum::PUBLISHED);
    }
}
