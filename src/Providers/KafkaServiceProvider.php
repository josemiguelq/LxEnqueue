<?php

namespace PicPay\Kafka\Providers;

use Illuminate\Support\ServiceProvider;
use PicPay\Kafka\Console\GenerateConsumerCommand;

class KafkaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/path/to/config/courier.php' => config_path('kafka.php'),
        ]);
        $this->commands([GenerateConsumerCommand::class]);
    }
}
