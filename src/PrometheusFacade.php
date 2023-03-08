<?php

declare(strict_types=1);

namespace JoeriAbbo\LaravelPrometheusExporter;

use Illuminate\Support\Facades\Facade;

class PrometheusFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'prometheus';
    }
}
