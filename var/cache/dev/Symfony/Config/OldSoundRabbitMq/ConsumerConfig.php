<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'QueueOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'GracefulMaxExecutionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'QosOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConsumerConfig 
{
    private $exchangeOptions;
    private $queueOptions;
    private $connection;
    private $callback;
    private $idleTimeout;
    private $idleTimeoutExitCode;
    private $timeoutWait;
    private $gracefulMaxExecution;
    private $autoSetupFabric;
    private $qosOptions;
    private $enableLogger;
    private $_usedProperties = [];

    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->_usedProperties['exchangeOptions'] = true;
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\ExchangeOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }

        return $this->exchangeOptions;
    }

    public function queueOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QueueOptionsConfig
    {
        if (null === $this->queueOptions) {
            $this->_usedProperties['queueOptions'] = true;
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QueueOptionsConfig($value);
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

    public function gracefulMaxExecution(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\GracefulMaxExecutionConfig
    {
        if (null === $this->gracefulMaxExecution) {
            $this->_usedProperties['gracefulMaxExecution'] = true;
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\GracefulMaxExecutionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gracefulMaxExecution()" has already been initialized. You cannot pass values the second time you call gracefulMaxExecution().');
        }

        return $this->gracefulMaxExecution;
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

    public function qosOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QosOptionsConfig
    {
        if (null === $this->qosOptions) {
            $this->_usedProperties['qosOptions'] = true;
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QosOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "qosOptions()" has already been initialized. You cannot pass values the second time you call qosOptions().');
        }

        return $this->qosOptions;
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
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }

        if (array_key_exists('queue_options', $value)) {
            $this->_usedProperties['queueOptions'] = true;
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QueueOptionsConfig($value['queue_options']);
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

        if (array_key_exists('graceful_max_execution', $value)) {
            $this->_usedProperties['gracefulMaxExecution'] = true;
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\GracefulMaxExecutionConfig($value['graceful_max_execution']);
            unset($value['graceful_max_execution']);
        }

        if (array_key_exists('auto_setup_fabric', $value)) {
            $this->_usedProperties['autoSetupFabric'] = true;
            $this->autoSetupFabric = $value['auto_setup_fabric'];
            unset($value['auto_setup_fabric']);
        }

        if (array_key_exists('qos_options', $value)) {
            $this->_usedProperties['qosOptions'] = true;
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QosOptionsConfig($value['qos_options']);
            unset($value['qos_options']);
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
        if (isset($this->_usedProperties['idleTimeout'])) {
            $output['idle_timeout'] = $this->idleTimeout;
        }
        if (isset($this->_usedProperties['idleTimeoutExitCode'])) {
            $output['idle_timeout_exit_code'] = $this->idleTimeoutExitCode;
        }
        if (isset($this->_usedProperties['timeoutWait'])) {
            $output['timeout_wait'] = $this->timeoutWait;
        }
        if (isset($this->_usedProperties['gracefulMaxExecution'])) {
            $output['graceful_max_execution'] = $this->gracefulMaxExecution->toArray();
        }
        if (isset($this->_usedProperties['autoSetupFabric'])) {
            $output['auto_setup_fabric'] = $this->autoSetupFabric;
        }
        if (isset($this->_usedProperties['qosOptions'])) {
            $output['qos_options'] = $this->qosOptions->toArray();
        }
        if (isset($this->_usedProperties['enableLogger'])) {
            $output['enable_logger'] = $this->enableLogger;
        }

        return $output;
    }

}
