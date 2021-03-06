<?php

namespace Enqueue\AmqpBunny\Tests\Spec;

use Enqueue\AmqpBunny\AmqpConnectionFactory;
use Interop\Queue\Spec\Amqp\BasicConsumeShouldRemoveConsumerTagOnUnsubscribeSpec;

/**
 * @group functional
 */
class AmqpBasicConsumeShouldRemoveConsumerTagOnUnsubscribeTest extends BasicConsumeShouldRemoveConsumerTagOnUnsubscribeSpec
{
    /**
     * {@inheritdoc}
     */
    protected function createContext()
    {
        $factory = new AmqpConnectionFactory(getenv('AMQP_DSN'));

        return $factory->createContext();
    }
}
