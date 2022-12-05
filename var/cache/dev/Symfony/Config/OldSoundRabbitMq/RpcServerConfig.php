<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RpcServerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RpcServerConfig'.\DIRECTORY_SEPARATOR.'QueueOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RpcServerConfig'.\DIRECTORY_SEPARATOR.'QosOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class RpcServerConfig 
{
    private $exchangeOptions;
    private $queueOptions;
    private $connection;
    private $callback;
    private $qosOptions;
    private $serializer;
    private $enableLogger;
    private $_usedProperties = [];

    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\ExchangeOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }

        return $this->exchangeOptions;
    }

    public function queueOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QueueOptionsConfig
    {
        if (null === $this->queueOptions) {
            $this->_usedProperties['queueOptions'] = true;
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QueueOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "queueOptions()" has already been initialized. You cannot pass values the second time you call queueOptions().');
        }

        return $this->queueOptions;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): self
    {
        $this->_usedProperties['connection'] = true;
        $this->connection = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function callback($value): self
    {
        $this->_usedProperties['callback'] = true;
        $this->callback = $value;

        return $this;
    }

    public function qosOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QosOptionsConfig
    {
        if (null === $this->qosOptions) {
            $this->_usedProperties['qosOptions'] = true;
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QosOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "qosOptions()" has already been initialized. You cannot pass values the second time you call qosOptions().');
        }

        return $this->qosOptions;
    }

    /**
     * @default 'serialize'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serializer($value): self
    {
        $this->_usedProperties['serializer'] = true;
        $this->serializer = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enableLogger($value): self
    {
        $this->_usedProperties['enableLogger'] = true;
        $this->enableLogger = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('exchange_options', $value)) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }

        if (array_key_exists('queue_options', $value)) {
            $this->_usedProperties['queueOptions'] = true;
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QueueOptionsConfig($value['queue_options']);
            unset($value['queue_options']);
        }

        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }

        if (array_key_exists('callback', $value)) {
            $this->_usedProperties['callback'] = true;
            $this->callback = $value['callback'];
            unset($value['callback']);
        }

        if (array_key_exists('qos_options', $value)) {
            $this->_usedProperties['qosOptions'] = true;
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QosOptionsConfig($value['qos_options']);
            unset($value['qos_options']);
        }

        if (array_key_exists('serializer', $value)) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = $value['serializer'];
            unset($value['serializer']);
        }

        if (array_key_exists('enable_logger', $value)) {
            $this->_usedProperties['enableLogger'] = true;
            $this->enableLogger = $value['enable_logger'];
            unset($value['enable_logger']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['exchangeOptions'])) {
            $output['exchange_options'] = $this->exchangeOptions->toArray();
        }
        if (isset($this->_usedProperties['queueOptions'])) {
            $output['queue_options'] = $this->queueOptions->toArray();
        }
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }
        if (isset($this->_usedProperties['callback'])) {
            $output['callback'] = $this->callback;
        }
        if (isset($this->_usedProperties['qosOptions'])) {
            $output['qos_options'] = $this->qosOptions->toArray();
        }
        if (isset($this->_usedProperties['serializer'])) {
            $output['serializer'] = $this->serializer;
        }
        if (isset($this->_usedProperties['enableLogger'])) {
            $output['enable_logger'] = $this->enableLogger;
        }

        return $output;
    }

}
