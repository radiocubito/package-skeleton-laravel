<?php

namespace Radiocubito\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Radiocubito\Skeleton\Skeleton
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
