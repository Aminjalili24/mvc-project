<?php

namespace System\Router\Api;

class Route
{
    public static function get($url, $executeMethod, $name = null)
    {
        $executeMethod = explode('@', $executeMethod);
        $class = $executeMethod[0];
        $method = $executeMethod[1];

        global $routes;

        $routes['get'][] = ['url' => 'api/' . trim($url, '/ '), 'class' => $class, 'method' => $method];

    }

    public static function post($url, $executeMethod, $name = null)
    {
        $executeMethod = explode('@', $executeMethod);
        $class = $executeMethod[0];
        $method = $executeMethod[1];

        global $routes;

        $routes['post'][] = ['url' => 'api/' . trim($url, '/ '), 'class' => $class, 'method' => $method];

    }


}