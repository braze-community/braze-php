<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Braze\Exception;

class PostUsersExportSegmentBadRequestException extends BadRequestException
{
    /**
     * @var \Braze\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Braze\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('400 Bad Request');
        $this->error = $error;
        $this->response = $response;
    }

    public function getError(): \Braze\Model\Error
    {
        return $this->error;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
