<?php

return [
    'default' => 'RdKafka',
    'RdKafka' => [
        'global' => [
            'group.id' => env('KAFKA_GROUP_ID'),
            'metadata.broker.list' => env('KAFKA_BROKERS'),
            'offset.store.method' => env('KAFKA_GROUP_ID', 'broker')
        ]
    ],
];
