<?php

declare(strict_types=1);


namespace Destebang\AmqplibMessengerAdapter\Transport;


use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;
use Symfony\Component\Messenger\Transport\TransportFactoryInterface;
use Symfony\Component\Messenger\Transport\TransportInterface;

class AmqpLibTransportFactory implements TransportFactoryInterface
{
    public function createTransport(string $dsn, array $options, SerializerInterface $serializer): TransportInterface
    {
        // TODO: Implement createTransport() method.
    }

    public function supports(string $dsn, array $options): bool
    {
        return 0 === strpos($dsn, 'amqp+lib://')
            || 0 === strpos($dsn, 'amqps+lib://');
    }
}