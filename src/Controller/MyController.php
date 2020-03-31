<?php

namespace App\Controller;

use App\AsyncResponse;
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
        return new AsyncResponse($urlParam);
    }
}