<?php

declare(strict_types=1);

namespace App\Enums\Post;

enum PostStatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
}
