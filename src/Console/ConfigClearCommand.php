<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * config:clear command.
 */
final class ConfigClearCommand implements CommandInterface
{
    public function name(): string
    {
        return 'config:clear';
    }

    public function description(): string
    {
        return 'Run config:clear (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
