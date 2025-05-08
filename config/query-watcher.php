<?php

return [
    'enabled' => env('QUERY_WATCHER_ENABLED', true),
    'threshold_ms' => env('QUERY_WATCHER_THRESHOLD', 1000),
    'log_channel' => env('QUERY_WATCHER_LOG_CHANNEL', 'stack'),
    'slack_enabled' => env('QUERY_WATCHER_SLACK_ENABLED', false),
];
