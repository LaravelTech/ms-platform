<?php

return [
  /*
    |--------------------------------------------------------------------------
    | Authenticate Module
    |--------------------------------------------------------------------------
    |
    | This is the Authenticate Module
    |
    */
    'name' => 'authenticate',

    /*
    |--------------------------------------------------------------------------
    | Authenticate Module route settings
    |--------------------------------------------------------------------------
    |
    */
    'route' => [

      'prefix' => 'devlancer/auth',

      'namespace' => 'Devlancer\Authenticate',

      'middleware' => '',
  ],
];