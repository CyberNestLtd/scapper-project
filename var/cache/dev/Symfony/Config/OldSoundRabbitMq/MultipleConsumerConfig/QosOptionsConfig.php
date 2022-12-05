<?php

namespace Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class QosOptionsConfig 
{
    private $prefetchSize;
    private $prefetchCount;
    private $global;
    private $_usedProperties = [];

    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefetchSize($value): self
    {
        $this->_usedProperties['prefetchSize'] = true;
        $this->prefetchSize = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefetchCount($value): self
    {
        $this->_usedProperties['prefetchCount'] = true;
        $this->prefetchCount = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function global($value): self
    {
        $this->_usedProperties['global'] = true;
        $this->global = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('prefetch_size', $value)) {
            $this->_usedProperties['prefetchSize'] = true;
            $this->prefetchSize = $value['prefetch_size'];
            unset($value['prefetch_size']);
        }

        if (array_key_exists('prefetch_count', $value)) {
            $this->_usedProperties['prefetchCount'] = true;
            $this->prefetchCount = $value['prefetch_count'];
            unset($value['prefetch_count']);
        }

        if (array_key_exists('global', $value)) {
            $this->_usedProperties['global'] = true;
            $this->global = $value['global'];
            unset($value['global']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['prefetchSize'])) {
            $output['prefetch_size'] = $this->prefetchSize;
        }
        if (isset($this->_usedProperties['prefetchCount'])) {
            $output['prefetch_count'] = $this->prefetchCount;
        }
        if (isset($this->_usedProperties['global'])) {
            $output['global'] = $this->global;
        }

        return $output;
    }

}
