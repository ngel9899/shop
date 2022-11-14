<?php

use core\Router;

Router::add('^product/.+/?$', ['controller' => 'product', 'action' => 'getlist', 'params' => trim(urldecode($_SERVER['QUERY_STRING']), '/')]);
Router::add('^form/auth/?$', ['controller' => 'form', 'action' => 'auth']);
Router::add('^user/getall/?$', ['controller' => 'user', 'action' => 'getall']);
Router::add('^user/getone/?$', ['controller' => 'user', 'action' => 'getone']);
Router::add('^admin/?$', ['controller' => 'main', 'action' => 'index', 'admin_prefix' => 'admin']);
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
//Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?');
