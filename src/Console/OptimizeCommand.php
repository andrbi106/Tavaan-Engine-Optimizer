<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * optimize command.
 */
final class OptimizeCommand implements CommandInterface
{
    public function name(): string
    {
        return 'optimize';
    }

    public function description(): string
    {
        return 'Run optimize (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
