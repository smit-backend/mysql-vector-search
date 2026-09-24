<?php

return [
    'enabled' => env('MYSQL_VECTOR_SEARCH_ENABLED', true),
    'timeout' => env('MYSQL_VECTOR_SEARCH_TIMEOUT', 30),
    'log_channel' => env('MYSQL_VECTOR_SEARCH_LOG', 'stack'),
];
