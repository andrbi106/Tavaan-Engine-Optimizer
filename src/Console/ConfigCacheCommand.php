<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * config:cache command.
 */
final class ConfigCacheCommand implements CommandInterface
{
    public function name(): string
    {
        return 'config:cache';
    }

    public function description(): string
    {
        return 'Run config:cache (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
