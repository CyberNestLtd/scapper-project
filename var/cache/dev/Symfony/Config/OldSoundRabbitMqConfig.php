<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'ConnectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'BindingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'ProducerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'ConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'DynamicConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'BatchConsumersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'AnonConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'RpcClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'RpcServerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OldSoundRabbitMqConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $debug;
    private $enableCollector;
    private $sandbox;
    private $connections;
    private $bindings;
    private $producers;
    private $consumers;
    private $multipleConsumers;
    private $dynamicConsumers;
    private $batchConsumers;
    private $anonConsumers;
    private $rpcClients;
    private $rpcServers;
    private $_usedProperties = [];

    /**
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableCollector($value): self
    {
        $this->_usedProperties['enableCollector'] = true;
        $this->enableCollector = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sandbox($value): self
    {
        $this->_usedProperties['sandbox'] = true;
        $this->sandbox = $value;

        return $this;
    }

    public function connection(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\ConnectionConfig
    {
        if (!isset($this->connections[$key])) {
            $this->_usedProperties['connections'] = true;
            $this->connections[$key] = new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "connection()" has already been initialized. You cannot pass values the second time you call connection().');
        }

        return $this->connections[$key];
    }

    public function binding(array $value = []): \Symfony\Config\OldSoundRabbitMq\BindingConfig
    {
        $this->_usedProperties['bindings'] = true;

        return $this->bindings[] = new \Symfony\Config\OldSoundRabbitMq\BindingConfig($value);
    }

    public function producer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\ProducerConfig
    {
        if (!isset($this->producers[$key])) {
            $this->_usedProperties['producers'] = true;
            $this->producers[$key] = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "producer()" has already been initialized. You cannot pass values the second time you call producer().');
        }

        return $this->producers[$key];
    }

    public function consumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig
    {
        if (!isset($this->consumers[$key])) {
            $this->_usedProperties['consumers'] = true;
            $this->consumers[$key] = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "consumer()" has already been initialized. You cannot pass values the second time you call consumer().');
        }

        return $this->consumers[$key];
    }

    public function multipleConsumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig
    {
        if (!isset($this->multipleConsumers[$key])) {
            $this->_usedProperties['multipleConsumers'] = true;
            $this->multipleConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "multipleConsumer()" has already been initialized. You cannot pass values the second time you call multipleConsumer().');
        }

        return $this->multipleConsumers[$key];
    }

    public function dynamicConsumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig
    {
        if (!isset($this->dynamicConsumers[$key])) {
            $this->_usedProperties['dynamicConsumers'] = true;
            $this->dynamicConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dynamicConsumer()" has already been initialized. You cannot pass values the second time you call dynamicConsumer().');
        }

        return $this->dynamicConsumers[$key];
    }

    public function batchConsumers(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig
    {
        if (!isset($this->batchConsumers[$key])) {
            $this->_usedProperties['batchConsumers'] = true;
            $this->batchConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "batchConsumers()" has already been initialized. You cannot pass values the second time you call batchConsumers().');
        }

        return $this->batchConsumers[$key];
    }

    public function anonConsumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig
    {
        if (!isset($this->anonConsumers[$key])) {
            $this->_usedProperties['anonConsumers'] = true;
            $this->anonConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "anonConsumer()" has already been initialized. You cannot pass values the second time you call anonConsumer().');
        }

        return $this->anonConsumers[$key];
    }

    public function rpcClient(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcClientConfig
    {
        if (!isset($this->rpcClients[$key])) {
            $this->_usedProperties['rpcClients'] = true;
            $this->rpcClients[$key] = new \Symfony\Config\OldSoundRabbitMq\RpcClientConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "rpcClient()" has already been initialized. You cannot pass values the second time you call rpcClient().');
        }

        return $this->rpcClients[$key];
    }

    public function rpcServer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig
    {
        if (!isset($this->rpcServers[$key])) {
            $this->_usedProperties['rpcServers'] = true;
            $this->rpcServers[$key] = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "rpcServer()" has already been initialized. You cannot pass values the second time you call rpcServer().');
        }

        return $this->rpcServers[$key];
    }

    public function getExtensionAlias(): string
    {
        return 'old_sound_rabbit_mq';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }

        if (array_key_exists('enable_collector', $value)) {
            $this->_usedProperties['enableCollector'] = true;
            $this->enableCollector = $value['enable_collector'];
            unset($value['enable_collector']);
        }

        if (array_key_exists('sandbox', $value)) {
            $this->_usedProperties['sandbox'] = true;
            $this->sandbox = $value['sandbox'];
            unset($value['sandbox']);
        }

        if (array_key_exists('connections', $value)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig($v); }, $value['connections']);
            unset($value['connections']);
        }

        if (array_key_exists('bindings', $value)) {
            $this->_usedProperties['bindings'] = true;
            $this->bindings = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\BindingConfig($v); }, $value['bindings']);
            unset($value['bindings']);
        }

        if (array_key_exists('producers', $value)) {
            $this->_usedProperties['producers'] = true;
            $this->producers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ProducerConfig($v); }, $value['producers']);
            unset($value['producers']);
        }

        if (array_key_exists('consumers', $value)) {
            $this->_usedProperties['consumers'] = true;
            $this->consumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig($v); }, $value['consumers']);
            unset($value['consumers']);
        }

        if (array_key_exists('multiple_consumers', $value)) {
            $this->_usedProperties['multipleConsumers'] = true;
            $this->multipleConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig($v); }, $value['multiple_consumers']);
            unset($value['multiple_consumers']);
        }

        if (array_key_exists('dynamic_consumers', $value)) {
            $this->_usedProperties['dynamicConsumers'] = true;
            $this->dynamicConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig($v); }, $value['dynamic_consumers']);
            unset($value['dynamic_consumers']);
        }

        if (array_key_exists('batch_consumers', $value)) {
            $this->_usedProperties['batchConsumers'] = true;
            $this->batchConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig($v); }, $value['batch_consumers']);
            unset($value['batch_consumers']);
        }

        if (array_key_exists('anon_consumers', $value)) {
            $this->_usedProperties['anonConsumers'] = true;
            $this->anonConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig($v); }, $value['anon_consumers']);
            unset($value['anon_consumers']);
        }

        if (array_key_exists('rpc_clients', $value)) {
            $this->_usedProperties['rpcClients'] = true;
            $this->rpcClients = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\RpcClientConfig($v); }, $value['rpc_clients']);
            unset($value['rpc_clients']);
        }

        if (array_key_exists('rpc_servers', $value)) {
            $this->_usedProperties['rpcServers'] = true;
            $this->rpcServers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig($v); }, $value['rpc_servers']);
            unset($value['rpc_servers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
        if (isset($this->_usedProperties['enableCollector'])) {
            $output['enable_collector'] = $this->enableCollector;
        }
        if (isset($this->_usedProperties['sandbox'])) {
            $output['sandbox'] = $this->sandbox;
        }
        if (isset($this->_usedProperties['connections'])) {
            $output['connections'] = array_map(function ($v) { return $v->toArray(); }, $this->connections);
        }
        if (isset($this->_usedProperties['bindings'])) {
            $output['bindings'] = array_map(function ($v) { return $v->toArray(); }, $this->bindings);
        }
        if (isset($this->_usedProperties['producers'])) {
            $output['producers'] = array_map(function ($v) { return $v->toArray(); }, $this->producers);
        }
        if (isset($this->_usedProperties['consumers'])) {
            $output['consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->consumers);
        }
        if (isset($this->_usedProperties['multipleConsumers'])) {
            $output['multiple_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->multipleConsumers);
        }
        if (isset($this->_usedProperties['dynamicConsumers'])) {
            $output['dynamic_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->dynamicConsumers);
        }
        if (isset($this->_usedProperties['batchConsumers'])) {
            $output['batch_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->batchConsumers);
        }
        if (isset($this->_usedProperties['anonConsumers'])) {
            $output['anon_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->anonConsumers);
        }
        if (isset($this->_usedProperties['rpcClients'])) {
            $output['rpc_clients'] = array_map(function ($v) { return $v->toArray(); }, $this->rpcClients);
        }
        if (isset($this->_usedProperties['rpcServers'])) {
            $output['rpc_servers'] = array_map(function ($v) { return $v->toArray(); }, $this->rpcServers);
        }

        return $output;
    }

}
