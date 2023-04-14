<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

if (!function_exists('active_link')) {
    function active_link(string $name, string $class = 'active'): string
    {
        return Route::is($name) ? $class : "";
    }
}

if (!function_exists('get_current_routes')) {
    function get_current_routes() : array
    {
        $currentPath = Request::path();
        $currentRoutes = [];
        $currentRoutes[] = $currentPath;
        if (strpos($currentPath, '/')) {
            while(strpos($currentPath, '/')) {
                $currentPath = substr($currentPath, 0, strripos($currentPath, '/'));
                $currentRoutes[] = $currentPath;
            }
        }
       $currentRoutes = array_reverse($currentRoutes);
        //dd($currentRoutes);
        return $currentRoutes;
    }
}

if (!function_exists('alert')) {
    function alert(string|array $name, string $status)
    {
        session(['alert'=>$name]);
        session(['alert_status'=>$status]);
    }
}

if (!function_exists('get_readable_form_errors')) {
    function get_readable_form_errors(array $failed_rules) : array
    {
      $current_readable_errors = [];
      $readable_errors =  config('constants.validatedFailedNames');

      foreach ($failed_rules as $item) {
        if (array_search($item, $readable_errors)) {
            $current_readable_errors[] = array_search($item, $readable_errors);
        }
      }

      return $current_readable_errors;

    }
}

