<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AnonConsumerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class AnonConsumerConfig 
{
    private $exchangeOptions;
    private $connection;
    private $callback;
    private $_usedProperties = [];

    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig\ExchangeOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }

        return $this->exchangeOptions;
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

    public function __construct(array $value = [])
    {
        if (array_key_exists('exchange_options', $value)) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
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
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }
        if (isset($this->_usedProperties['callback'])) {
            $output['callback'] = $this->callback;
        }

        return $output;
    }

}
