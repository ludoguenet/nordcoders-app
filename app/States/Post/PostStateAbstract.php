<?php

declare(strict_types=1);

namespace App\States\Post;

use App\Models\Post;

abstract class PostStateAbstract
{
    public function __construct(
        protected readonly Post $post,
    ) {
    }

    abstract public function statusColor(): string;
}
