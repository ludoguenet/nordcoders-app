<?php

declare(strict_types=1);

namespace App\Enum\Post;

enum PostStatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
}
