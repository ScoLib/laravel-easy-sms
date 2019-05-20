<?php

namespace Sco\LaravelEasySms;

use Illuminate\Support\Facades\Facade;
use Overtrue\EasySms\EasySms;

class EasySmsFacade extends Facade
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor()
    {
        return EasySms::class;
    }
}
