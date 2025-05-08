<?php

namespace QueryWatcher\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class QueryWatcherServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/query-watcher.php', 'query-watcher');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/query-watcher.php' => config_path('query-watcher.php'),
        ], 'config');

        if (config('query-watcher.enabled')) {
            DB::listen(function ($query) {
                $threshold = config('query-watcher.threshold_ms', 1000);

                if ($query->time >= $threshold) {
                    $message = "[SLOW QUERY] {$query->sql} | time: {$query->time}ms";
                    Log::channel(config('query-watcher.log_channel'))->warning($message);

                    if (config('query-watcher.slack_enabled')) {
                        // 예: Slack로 보내는 로직을 여기에 추가
                    }
                }
            });
        }
    }
}
