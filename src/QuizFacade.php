<?php

namespace Getsircles\Quiz;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Getsircles\Quiz\Skeleton\SkeletonClass
 */
class QuizFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'quiz';
    }
}
