<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer\Contracts;

/**
 * قرارداد Optimizer.
 *
 * @see \Tavaan\Engine\Optimizer\Optimizer
 * @api 1.0
 */
interface OptimizerInterface
{
    /**
     * متد optimize.
     *
     * @return mixed
     */
    public function optimize(/* ... */): mixed;

    /**
     * متد clear.
     *
     * @return mixed
     */
    public function clear(/* ... */): mixed;

    /**
     * متد cache.
     *
     * @return mixed
     */
    public function cache(/* ... */): mixed;

    /**
     * متد isFresh.
     *
     * @return mixed
     */
    public function isFresh(/* ... */): mixed;
}