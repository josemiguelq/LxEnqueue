# Installation
Make sure you have the Kafka PHP driver and Kafka Client installed. You can find installation instructions at https
://github.com/edenhill/librdkafka and https://pecl.php.net/package/rdkafka.


```bash
$ composer require ///
```

### Laravel

In case your Laravel version does NOT autoload the packages, add the service provider to `config/app.php`:

```php
PicPay\Kafka\Providers\KafkaServiceProvider
```

### Lumen

For usage with [Lumen](http://lumen.laravel.com), add the service provider in `bootstrap/app.php`. In this file, you will also need to enable Eloquent. You must however ensure that your call to `$app->withEloquent();` is **below** where you have registered the `MongodbServiceProvider`:

```php
$app->register(PicPay\Kafka\Providers\KafkaServiceProvider);
```

The service provider will register a commands . There is no need to register additional facades or objects.

```php
php artisan vendor:publish --provider="PicPay\Kafka\Providers\KafkaServiceProvider"
```

Configuration
-------------

https://github.com/edenhill/librdkafka/blob/master/CONFIGURATION.md

```php
[
   'RdKafka' => [
       'global' => [
          'group.id' => 'herodash',
           //Here you put kafka hosts separated by commas
          'metadata.broker.list' => env(''),
          'offset.store.method' => 'broker'
      ]
    ]
]
```
