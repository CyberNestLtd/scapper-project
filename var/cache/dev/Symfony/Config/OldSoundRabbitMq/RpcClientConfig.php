<?php

namespace Symfony\Config\OldSoundRabbitMq;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RpcClientConfig 
{
    private $connection;
    private $expectSerializedResponse;
    private $unserializer;
    private $lazy;
    private $directReplyTo;
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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function expectSerializedResponse($value): self
    {
        $this->_usedProperties['expectSerializedResponse'] = true;
        $this->expectSerializedResponse = $value;

        return $this;
    }

    /**
     * @default 'unserialize'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function unserializer($value): self
    {
        $this->_usedProperties['unserializer'] = true;
        $this->unserializer = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lazy($value): self
    {
        $this->_usedProperties['lazy'] = true;
        $this->lazy = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function directReplyTo($value): self
    {
        $this->_usedProperties['directReplyTo'] = true;
        $this->directReplyTo = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }

        if (array_key_exists('expect_serialized_response', $value)) {
            $this->_usedProperties['expectSerializedResponse'] = true;
            $this->expectSerializedResponse = $value['expect_serialized_response'];
            unset($value['expect_serialized_response']);
        }

        if (array_key_exists('unserializer', $value)) {
            $this->_usedProperties['unserializer'] = true;
            $this->unserializer = $value['unserializer'];
            unset($value['unserializer']);
        }

        if (array_key_exists('lazy', $value)) {
            $this->_usedProperties['lazy'] = true;
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }

        if (array_key_exists('direct_reply_to', $value)) {
            $this->_usedProperties['directReplyTo'] = true;
            $this->directReplyTo = $value['direct_reply_to'];
            unset($value['direct_reply_to']);
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
        if (isset($this->_usedProperties['expectSerializedResponse'])) {
            $output['expect_serialized_response'] = $this->expectSerializedResponse;
        }
        if (isset($this->_usedProperties['unserializer'])) {
            $output['unserializer'] = $this->unserializer;
        }
        if (isset($this->_usedProperties['lazy'])) {
            $output['lazy'] = $this->lazy;
        }
        if (isset($this->_usedProperties['directReplyTo'])) {
            $output['direct_reply_to'] = $this->directReplyTo;
        }

        return $output;
    }

}
