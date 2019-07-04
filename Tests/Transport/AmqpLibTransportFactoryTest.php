<?php

namespace Destebang\AmqplibMessengerAdapter\Tests\Transport;

use Destebang\AmqplibMessengerAdapter\Transport\AmqpLibTransportFactory;
use PHPUnit\Framework\TestCase;

class AmqpLibTransportFactoryTest extends TestCase
{
    public function testSupportsAmqpLibAndAmqpsLibTransports(): void
    {
        $factory = new AmqpLibTransportFactory();

        $this->assertFalse($factory->supports('amqp://localhost', []));
        $this->assertFalse($factory->supports('sqs://localhost', []));
        $this->assertFalse($factory->supports('invalid-dsn', []));

        $this->assertTrue($factory->supports('amqp+lib://', []));
        $this->assertTrue($factory->supports('amqps+lib://', []));
    }
}
