<?php

namespace Networkteam\SentryClient;

class DebugExceptionHandler extends \TYPO3\CMS\Core\Error\DebugExceptionHandler
{

    /**
     * @param \Throwable $exception The throwable object.
     * @throws \Exception
     */
    public function handleException(\Throwable $exception)
    {
        $GLOBALS['USER']['sentryClient']->captureException($exception);
        parent::handleException($exception);
    }
}