<?php

namespace App\Middleware;

use App\Views\View;
use App\Session\SessionStore;

class ShareValidationErrors
{
    protected $view;
    protected $session;

    public function __construct(View $view, SessionStore $session)
    {
        $this->view = $view;
        $this->session = $session;
    }

    public function __invoke($request, $response, callable $next)
    {
        $this->view->share([
            'errors' => $this->session->get('errors', []),
            'old'   => $this->session->get('old', []),
        ]);
        return $next($request, $response);
    }
}