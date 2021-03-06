<?php namespace Unplag\Exception;

use Unplag\Request;

/**
 * Class RequestException
 * @package Unplag\Exception
 */
class RequestException extends \Exception implements UnplagException
{
    /**
     * @var Request
     */
    protected $req;

    /**
     * RequestException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     * @param Request $request
     */
    public function __construct($message, $code, \Exception $previous, Request $request)
    {
        parent::__construct($message, $code, $previous);
        $this->req = $request;
    }

    /**
     * Method getRequest description.
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->req;
    }
}