<?php

declare(strict_types=1);

namespace App\EloquentBuilders\Post;

use App\Enums\Post\PostStatusEnum;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @template TModelClass of Model
 *
 * @extends Builder<Post>
 */
final class PostBuilder extends Builder
{
    /**
     * @return PostBuilder<TModelClass>
     */
    public function published(): self
    {
        return $this->where('status', PostStatusEnum::PUBLISHED);
    }
}
