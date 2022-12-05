<?php

namespace Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GracefulMaxExecutionConfig 
{
    private $timeout;
    private $exitCode;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->_usedProperties['timeout'] = true;
        $this->timeout = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function exitCode($value): self
    {
        $this->_usedProperties['exitCode'] = true;
        $this->exitCode = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('timeout', $value)) {
            $this->_usedProperties['timeout'] = true;
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }

        if (array_key_exists('exit_code', $value)) {
            $this->_usedProperties['exitCode'] = true;
            $this->exitCode = $value['exit_code'];
            unset($value['exit_code']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['timeout'])) {
            $output['timeout'] = $this->timeout;
        }
        if (isset($this->_usedProperties['exitCode'])) {
            $output['exit_code'] = $this->exitCode;
        }

        return $output;
    }

}
