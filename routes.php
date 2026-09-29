<?php

use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/us', [PublicController::class, 'us']);

Router::addRoute('/us', [PublicController::class, 'tech']);

Router::addRoute('/test', [PublicController::class, 'test']);