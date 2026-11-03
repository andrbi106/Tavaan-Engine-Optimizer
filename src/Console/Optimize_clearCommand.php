<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * optimize:clear command.
 */
final class Optimize_clearCommand implements CommandInterface
{
    public function name(): string
    {
        return 'optimize:clear';
    }

    public function description(): string
    {
        return 'Run optimize:clear (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
