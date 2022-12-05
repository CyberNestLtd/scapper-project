<?php

namespace Symfony\Config\OldSoundRabbitMq;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BindingConfig 
{
    private $connection;
    private $exchange;
    private $destination;
    private $routingKey;
    private $nowait;
    private $destinationIsExchange;
    private $arguments;
    private $class;
    private $_usedProperties = [];

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
    public function exchange($value): self
    {
        $this->_usedProperties['exchange'] = true;
        $this->exchange = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function destination($value): self
    {
        $this->_usedProperties['destination'] = true;
        $this->destination = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routingKey($value): self
    {
        $this->_usedProperties['routingKey'] = true;
        $this->routingKey = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function nowait($value): self
    {
        $this->_usedProperties['nowait'] = true;
        $this->nowait = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function destinationIsExchange($value): self
    {
        $this->_usedProperties['destinationIsExchange'] = true;
        $this->destinationIsExchange = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function arguments($value = NULL): self
    {
        $this->_usedProperties['arguments'] = true;
        $this->arguments = $value;

        return $this;
    }

    /**
     * @default '%old_sound_rabbit_mq.binding.class%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }

        if (array_key_exists('exchange', $value)) {
            $this->_usedProperties['exchange'] = true;
            $this->exchange = $value['exchange'];
            unset($value['exchange']);
        }

        if (array_key_exists('destination', $value)) {
            $this->_usedProperties['destination'] = true;
            $this->destination = $value['destination'];
            unset($value['destination']);
        }

        if (array_key_exists('routing_key', $value)) {
            $this->_usedProperties['routingKey'] = true;
            $this->routingKey = $value['routing_key'];
            unset($value['routing_key']);
        }

        if (array_key_exists('nowait', $value)) {
            $this->_usedProperties['nowait'] = true;
            $this->nowait = $value['nowait'];
            unset($value['nowait']);
        }

        if (array_key_exists('destination_is_exchange', $value)) {
            $this->_usedProperties['destinationIsExchange'] = true;
            $this->destinationIsExchange = $value['destination_is_exchange'];
            unset($value['destination_is_exchange']);
        }

        if (array_key_exists('arguments', $value)) {
            $this->_usedProperties['arguments'] = true;
            $this->arguments = $value['arguments'];
            unset($value['arguments']);
        }

        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = $value['class'];
            unset($value['class']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }
        if (isset($this->_usedProperties['exchange'])) {
            $output['exchange'] = $this->exchange;
        }
        if (isset($this->_usedProperties['destination'])) {
            $output['destination'] = $this->destination;
        }
        if (isset($this->_usedProperties['routingKey'])) {
            $output['routing_key'] = $this->routingKey;
        }
        if (isset($this->_usedProperties['nowait'])) {
            $output['nowait'] = $this->nowait;
        }
        if (isset($this->_usedProperties['destinationIsExchange'])) {
            $output['destination_is_exchange'] = $this->destinationIsExchange;
        }
        if (isset($this->_usedProperties['arguments'])) {
            $output['arguments'] = $this->arguments;
        }
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }

        return $output;
    }

}
