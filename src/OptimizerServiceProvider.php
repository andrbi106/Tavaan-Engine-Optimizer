<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Optimizer\Contracts\OptimizerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * OptimizerServiceProvider — ثبت سرویس‌های موتور Optimizer.
 */
final class OptimizerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(OptimizerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Optimizer($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Optimizer\Console\OptimizeCommand::class;
        $this->commands[] = \Tavaan\Engine\Optimizer\Console\Optimize_clearCommand::class;
        $this->commands[] = \Tavaan\Engine\Optimizer\Console\Config_cacheCommand::class;
        $this->commands[] = \Tavaan\Engine\Optimizer\Console\Config_clearCommand::class;
        $this->commands[] = \Tavaan\Engine\Optimizer\Console\Autoload_cacheCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            OptimizerInterface::class,
        ];
    }
}