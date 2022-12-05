<?php

namespace Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExchangeOptionsConfig 
{
    private $name;
    private $type;
    private $passive;
    private $durable;
    private $autoDelete;
    private $internal;
    private $nowait;
    private $declare;
    private $arguments;
    private $ticket;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function passive($value): self
    {
        $this->_usedProperties['passive'] = true;
        $this->passive = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function durable($value): self
    {
        $this->_usedProperties['durable'] = true;
        $this->durable = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoDelete($value): self
    {
        $this->_usedProperties['autoDelete'] = true;
        $this->autoDelete = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function internal($value): self
    {
        $this->_usedProperties['internal'] = true;
        $this->internal = $value;

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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function declare($value): self
    {
        $this->_usedProperties['declare'] = true;
        $this->declare = $value;

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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ticket($value): self
    {
        $this->_usedProperties['ticket'] = true;
        $this->ticket = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('passive', $value)) {
            $this->_usedProperties['passive'] = true;
            $this->passive = $value['passive'];
            unset($value['passive']);
        }

        if (array_key_exists('durable', $value)) {
            $this->_usedProperties['durable'] = true;
            $this->durable = $value['durable'];
            unset($value['durable']);
        }

        if (array_key_exists('auto_delete', $value)) {
            $this->_usedProperties['autoDelete'] = true;
            $this->autoDelete = $value['auto_delete'];
            unset($value['auto_delete']);
        }

        if (array_key_exists('internal', $value)) {
            $this->_usedProperties['internal'] = true;
            $this->internal = $value['internal'];
            unset($value['internal']);
        }

        if (array_key_exists('nowait', $value)) {
            $this->_usedProperties['nowait'] = true;
            $this->nowait = $value['nowait'];
            unset($value['nowait']);
        }

        if (array_key_exists('declare', $value)) {
            $this->_usedProperties['declare'] = true;
            $this->declare = $value['declare'];
            unset($value['declare']);
        }

        if (array_key_exists('arguments', $value)) {
            $this->_usedProperties['arguments'] = true;
            $this->arguments = $value['arguments'];
            unset($value['arguments']);
        }

        if (array_key_exists('ticket', $value)) {
            $this->_usedProperties['ticket'] = true;
            $this->ticket = $value['ticket'];
            unset($value['ticket']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['passive'])) {
            $output['passive'] = $this->passive;
        }
        if (isset($this->_usedProperties['durable'])) {
            $output['durable'] = $this->durable;
        }
        if (isset($this->_usedProperties['autoDelete'])) {
            $output['auto_delete'] = $this->autoDelete;
        }
        if (isset($this->_usedProperties['internal'])) {
            $output['internal'] = $this->internal;
        }
        if (isset($this->_usedProperties['nowait'])) {
            $output['nowait'] = $this->nowait;
        }
        if (isset($this->_usedProperties['declare'])) {
            $output['declare'] = $this->declare;
        }
        if (isset($this->_usedProperties['arguments'])) {
            $output['arguments'] = $this->arguments;
        }
        if (isset($this->_usedProperties['ticket'])) {
            $output['ticket'] = $this->ticket;
        }

        return $output;
    }

}
