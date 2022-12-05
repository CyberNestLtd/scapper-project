<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProducerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProducerConfig'.\DIRECTORY_SEPARATOR.'QueueOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProducerConfig 
{
    private $exchangeOptions;
    private $queueOptions;
    private $connection;
    private $autoSetupFabric;
    private $class;
    private $enableLogger;
    private $serviceAlias;
    private $defaultRoutingKey;
    private $defaultContentType;
    private $defaultDeliveryMode;
    private $_usedProperties = [];

    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ProducerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\ExchangeOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }

        return $this->exchangeOptions;
    }

    public function queueOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ProducerConfig\QueueOptionsConfig
    {
        if (null === $this->queueOptions) {
            $this->_usedProperties['queueOptions'] = true;
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\QueueOptionsConfig($value);
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
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoSetupFabric($value): self
    {
        $this->_usedProperties['autoSetupFabric'] = true;
        $this->autoSetupFabric = $value;

        return $this;
    }

    /**
     * @default '%old_sound_rabbit_mq.producer.class%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

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

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceAlias($value): self
    {
        $this->_usedProperties['serviceAlias'] = true;
        $this->serviceAlias = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRoutingKey($value): self
    {
        $this->_usedProperties['defaultRoutingKey'] = true;
        $this->defaultRoutingKey = $value;

        return $this;
    }

    /**
     * @default 'text/plain'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultContentType($value): self
    {
        $this->_usedProperties['defaultContentType'] = true;
        $this->defaultContentType = $value;

        return $this;
    }

    /**
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultDeliveryMode($value): self
    {
        $this->_usedProperties['defaultDeliveryMode'] = true;
        $this->defaultDeliveryMode = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('exchange_options', $value)) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }

        if (array_key_exists('queue_options', $value)) {
            $this->_usedProperties['queueOptions'] = true;
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\QueueOptionsConfig($value['queue_options']);
            unset($value['queue_options']);
        }

        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }

        if (array_key_exists('auto_setup_fabric', $value)) {
            $this->_usedProperties['autoSetupFabric'] = true;
            $this->autoSetupFabric = $value['auto_setup_fabric'];
            unset($value['auto_setup_fabric']);
        }

        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = $value['class'];
            unset($value['class']);
        }

        if (array_key_exists('enable_logger', $value)) {
            $this->_usedProperties['enableLogger'] = true;
            $this->enableLogger = $value['enable_logger'];
            unset($value['enable_logger']);
        }

        if (array_key_exists('service_alias', $value)) {
            $this->_usedProperties['serviceAlias'] = true;
            $this->serviceAlias = $value['service_alias'];
            unset($value['service_alias']);
        }

        if (array_key_exists('default_routing_key', $value)) {
            $this->_usedProperties['defaultRoutingKey'] = true;
            $this->defaultRoutingKey = $value['default_routing_key'];
            unset($value['default_routing_key']);
        }

        if (array_key_exists('default_content_type', $value)) {
            $this->_usedProperties['defaultContentType'] = true;
            $this->defaultContentType = $value['default_content_type'];
            unset($value['default_content_type']);
        }

        if (array_key_exists('default_delivery_mode', $value)) {
            $this->_usedProperties['defaultDeliveryMode'] = true;
            $this->defaultDeliveryMode = $value['default_delivery_mode'];
            unset($value['default_delivery_mode']);
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
        if (isset($this->_usedProperties['autoSetupFabric'])) {
            $output['auto_setup_fabric'] = $this->autoSetupFabric;
        }
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['enableLogger'])) {
            $output['enable_logger'] = $this->enableLogger;
        }
        if (isset($this->_usedProperties['serviceAlias'])) {
            $output['service_alias'] = $this->serviceAlias;
        }
        if (isset($this->_usedProperties['defaultRoutingKey'])) {
            $output['default_routing_key'] = $this->defaultRoutingKey;
        }
        if (isset($this->_usedProperties['defaultContentType'])) {
            $output['default_content_type'] = $this->defaultContentType;
        }
        if (isset($this->_usedProperties['defaultDeliveryMode'])) {
            $output['default_delivery_mode'] = $this->defaultDeliveryMode;
        }

        return $output;
    }

}
