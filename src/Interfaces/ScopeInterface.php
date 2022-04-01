<?php

declare(strict_types=1);

namespace Matchory\Elasticsearch\Interfaces;

use Matchory\Elasticsearch\Model;
use Matchory\Elasticsearch\Builder;

interface ScopeInterface
{
    /**
     * Apply the scope to a given Elasticsearch query builder.
     *
     * @param Builder $query
     * @param Model   $model
     *
     * @return void
     */
    public function apply(Builder $query, Model $model): void;
}
