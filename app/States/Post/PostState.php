<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Enums\Post\PostStatusEnum;

final class PostState extends PostStateAbstract
{
    public function statusColor(): string
    {
        return match ($this->post->status) {
            PostStatusEnum::DRAFT => 'cyan',
            PostStatusEnum::PUBLISHED => 'green',
        };
    }
}
