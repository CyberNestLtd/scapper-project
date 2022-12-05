<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'GracefulMaxExecutionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'QueuesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'QosOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class MultipleConsumerConfig 
{
    private $exchangeOptions;
    private $connection;
    private $idleTimeout;
    private $idleTimeoutExitCode;
    private $timeoutWait;
    private $autoSetupFabric;
    private $gracefulMaxExecution;
    private $queues;
    private $qosOptions;
    private $queuesProvider;
    private $enableLogger;
    private $_usedProperties = [];

    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\ExchangeOptionsConfig($value);
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
    public function idleTimeout($value): self
    {
        $this->_usedProperties['idleTimeout'] = true;
        $this->idleTimeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function idleTimeoutExitCode($value): self
    {
        $this->_usedProperties['idleTimeoutExitCode'] = true;
        $this->idleTimeoutExitCode = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeoutWait($value): self
    {
        $this->_usedProperties['timeoutWait'] = true;
        $this->timeoutWait = $value;

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

    public function gracefulMaxExecution(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\GracefulMaxExecutionConfig
    {
        if (null === $this->gracefulMaxExecution) {
            $this->_usedProperties['gracefulMaxExecution'] = true;
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\GracefulMaxExecutionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gracefulMaxExecution()" has already been initialized. You cannot pass values the second time you call gracefulMaxExecution().');
        }

        return $this->gracefulMaxExecution;
    }

    public function queues(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QueuesConfig
    {
        $this->_usedProperties['queues'] = true;

        return $this->queues[] = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QueuesConfig($value);
    }

    public function qosOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QosOptionsConfig
    {
        if (null === $this->qosOptions) {
            $this->_usedProperties['qosOptions'] = true;
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QosOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "qosOptions()" has already been initialized. You cannot pass values the second time you call qosOptions().');
        }

        return $this->qosOptions;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function queuesProvider($value): self
    {
        $this->_usedProperties['queuesProvider'] = true;
        $this->queuesProvider = $value;

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
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }

        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }

        if (array_key_exists('idle_timeout', $value)) {
            $this->_usedProperties['idleTimeout'] = true;
            $this->idleTimeout = $value['idle_timeout'];
            unset($value['idle_timeout']);
        }

        if (array_key_exists('idle_timeout_exit_code', $value)) {
            $this->_usedProperties['idleTimeoutExitCode'] = true;
            $this->idleTimeoutExitCode = $value['idle_timeout_exit_code'];
            unset($value['idle_timeout_exit_code']);
        }

        if (array_key_exists('timeout_wait', $value)) {
            $this->_usedProperties['timeoutWait'] = true;
            $this->timeoutWait = $value['timeout_wait'];
            unset($value['timeout_wait']);
        }

        if (array_key_exists('auto_setup_fabric', $value)) {
            $this->_usedProperties['autoSetupFabric'] = true;
            $this->autoSetupFabric = $value['auto_setup_fabric'];
            unset($value['auto_setup_fabric']);
        }

        if (array_key_exists('graceful_max_execution', $value)) {
            $this->_usedProperties['gracefulMaxExecution'] = true;
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\GracefulMaxExecutionConfig($value['graceful_max_execution']);
            unset($value['graceful_max_execution']);
        }

        if (array_key_exists('queues', $value)) {
            $this->_usedProperties['queues'] = true;
            $this->queues = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QueuesConfig($v); }, $value['queues']);
            unset($value['queues']);
        }

        if (array_key_exists('qos_options', $value)) {
            $this->_usedProperties['qosOptions'] = true;
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QosOptionsConfig($value['qos_options']);
            unset($value['qos_options']);
        }

        if (array_key_exists('queues_provider', $value)) {
            $this->_usedProperties['queuesProvider'] = true;
            $this->queuesProvider = $value['queues_provider'];
            unset($value['queues_provider']);
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
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }
        if (isset($this->_usedProperties['idleTimeout'])) {
            $output['idle_timeout'] = $this->idleTimeout;
        }
        if (isset($this->_usedProperties['idleTimeoutExitCode'])) {
            $output['idle_timeout_exit_code'] = $this->idleTimeoutExitCode;
        }
        if (isset($this->_usedProperties['timeoutWait'])) {
            $output['timeout_wait'] = $this->timeoutWait;
        }
        if (isset($this->_usedProperties['autoSetupFabric'])) {
            $output['auto_setup_fabric'] = $this->autoSetupFabric;
        }
        if (isset($this->_usedProperties['gracefulMaxExecution'])) {
            $output['graceful_max_execution'] = $this->gracefulMaxExecution->toArray();
        }
        if (isset($this->_usedProperties['queues'])) {
            $output['queues'] = array_map(function ($v) { return $v->toArray(); }, $this->queues);
        }
        if (isset($this->_usedProperties['qosOptions'])) {
            $output['qos_options'] = $this->qosOptions->toArray();
        }
        if (isset($this->_usedProperties['queuesProvider'])) {
            $output['queues_provider'] = $this->queuesProvider;
        }
        if (isset($this->_usedProperties['enableLogger'])) {
            $output['enable_logger'] = $this->enableLogger;
        }

        return $output;
    }

}
