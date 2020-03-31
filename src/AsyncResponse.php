<?php

namespace App;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class AsyncResponse
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