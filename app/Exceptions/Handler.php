<?php

namespace App\Exceptions;

use App\Session\SessionStore;

class Handler
{

    protected $exception;
    protected $session;

    public function __construct(
        \Exception $exception,
        SessionStore $session
    ) {
        $this->exception = $exception;
        $this->session = $session;
    }

    public function respond()
    {
        $class = (new \ReflectionClass($this->exception))->getShortName();

        if (method_exists($this, $method = "handle{$class}")) {
            return $this->{$method}($this->exception);
        }

        return $this->unhandleException($this->exception);
    }

    protected function handleValidationException($e)
    {
        $this->session->set([
            'errors' => $e->getErrors(),
            'old' => $e->getOldInput(),
        ]);

        return redirect($e->getPath());
    }

    protected function unhandleException(\Exception $e)
    {
        throw $e;
    }
}