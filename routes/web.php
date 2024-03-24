<?php

use Illuminate\Support\Facades\Route;
use Prometheus\CollectorRegistry;
use Prometheus\Storage\InMemory;
use Prometheus\RenderTextFormat;

Route::get('/metrics', function () {
    $adapter = new InMemory();
    $registry = new CollectorRegistry($adapter);

    $renderer = new RenderTextFormat();
    $result = $renderer->render($registry->getMetricFamilySamples());

    return response($result)->header('Content-Type', $renderer->getMimeType());
});

Route::get('/', function () {
    return view('welcome');
});
