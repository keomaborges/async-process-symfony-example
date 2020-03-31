<?php

namespace App\Controller;

use App\AsyncResponse;
use App\EventSubscriber;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class MyController
 *
 * @package App\Controller
 */
class MyController extends AbstractController
{
    /**
     * @param string $urlParam
     * @return AsyncResponse
     */
    public function runAsyncProcess(string $urlParam)
    {
        /**
         * This endpoint only returns a response. After the returning, the event
         * on-terminate will be dispatched.
         * @see EventSubscriber
         */
        return new AsyncResponse($urlParam);
    }
}