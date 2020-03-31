<?php

namespace App;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class AsyncResponse
 *
 * This is our response class. It can uses as many as parameters we want for
 * running a process, command or doing stuff in the EventSubscriber.
 * @see EventSubscriber
 *
 * @package App
 */
class AsyncResponse extends Response
{
    /**
     * @var string
     */
    protected string $param;

    /**
     * AsyncResponse constructor.
     *
     * @param string $param
     */
    public function __construct(string $param)
    {
        parent::__construct('Process is running on background.');

        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getParam(): string
    {
        return $this->param;
    }
}