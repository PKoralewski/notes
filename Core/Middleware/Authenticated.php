<?php

namespace Core\Middleware;

class Authenticated {
    public function handle() {
        
        if (!isset($_SESSION['user']) || !$_SESSION['user']) redirect('/');

    }
}