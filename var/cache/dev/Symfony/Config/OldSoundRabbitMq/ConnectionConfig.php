<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ConnectionConfig'.\DIRECTORY_SEPARATOR.'HostsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConnectionConfig 
{
    private $url;
    private $host;
    private $port;
    private $user;
    private $password;
    private $vhost;
    private $hosts;
    private $lazy;
    private $connectionTimeout;
    private $readWriteTimeout;
    private $useSocket;
    private $sslContext;
    private $keepalive;
    private $heartbeat;
    private $connectionParametersProvider;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;

        return $this;
    }

    /**
     * @default 'localhost'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;

        return $this;
    }

    /**
     * @default 5672
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->_usedProperties['port'] = true;
        $this->port = $value;

        return $this;
    }

    /**
     * @default 'guest'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): self
    {
        $this->_usedProperties['user'] = true;
        $this->user = $value;

        return $this;
    }

    /**
     * @default 'guest'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): self
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vhost($value): self
    {
        $this->_usedProperties['vhost'] = true;
        $this->vhost = $value;

        return $this;
    }

    public function hosts(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConnectionConfig\HostsConfig
    {
        $this->_usedProperties['hosts'] = true;

        return $this->hosts[] = new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig\HostsConfig($value);
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
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionTimeout($value): self
    {
        $this->_usedProperties['connectionTimeout'] = true;
        $this->connectionTimeout = $value;

        return $this;
    }

    /**
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function readWriteTimeout($value): self
    {
        $this->_usedProperties['readWriteTimeout'] = true;
        $this->readWriteTimeout = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useSocket($value): self
    {
        $this->_usedProperties['useSocket'] = true;
        $this->useSocket = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sslContext(string $key, $value): self
    {
        $this->_usedProperties['sslContext'] = true;
        $this->sslContext[$key] = $value;

        return $this;
    }

    /**
     * requires php-amqplib v2.4.1+ and PHP5.4+
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function keepalive($value): self
    {
        $this->_usedProperties['keepalive'] = true;
        $this->keepalive = $value;

        return $this;
    }

    /**
     * requires php-amqplib v2.4.1+
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function heartbeat($value): self
    {
        $this->_usedProperties['heartbeat'] = true;
        $this->heartbeat = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionParametersProvider($value): self
    {
        $this->_usedProperties['connectionParametersProvider'] = true;
        $this->connectionParametersProvider = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }

        if (array_key_exists('port', $value)) {
            $this->_usedProperties['port'] = true;
            $this->port = $value['port'];
            unset($value['port']);
        }

        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = $value['user'];
            unset($value['user']);
        }

        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }

        if (array_key_exists('vhost', $value)) {
            $this->_usedProperties['vhost'] = true;
            $this->vhost = $value['vhost'];
            unset($value['vhost']);
        }

        if (array_key_exists('hosts', $value)) {
            $this->_usedProperties['hosts'] = true;
            $this->hosts = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig\HostsConfig($v); }, $value['hosts']);
            unset($value['hosts']);
        }

        if (array_key_exists('lazy', $value)) {
            $this->_usedProperties['lazy'] = true;
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }

        if (array_key_exists('connection_timeout', $value)) {
            $this->_usedProperties['connectionTimeout'] = true;
            $this->connectionTimeout = $value['connection_timeout'];
            unset($value['connection_timeout']);
        }

        if (array_key_exists('read_write_timeout', $value)) {
            $this->_usedProperties['readWriteTimeout'] = true;
            $this->readWriteTimeout = $value['read_write_timeout'];
            unset($value['read_write_timeout']);
        }

        if (array_key_exists('use_socket', $value)) {
            $this->_usedProperties['useSocket'] = true;
            $this->useSocket = $value['use_socket'];
            unset($value['use_socket']);
        }

        if (array_key_exists('ssl_context', $value)) {
            $this->_usedProperties['sslContext'] = true;
            $this->sslContext = $value['ssl_context'];
            unset($value['ssl_context']);
        }

        if (array_key_exists('keepalive', $value)) {
            $this->_usedProperties['keepalive'] = true;
            $this->keepalive = $value['keepalive'];
            unset($value['keepalive']);
        }

        if (array_key_exists('heartbeat', $value)) {
            $this->_usedProperties['heartbeat'] = true;
            $this->heartbeat = $value['heartbeat'];
            unset($value['heartbeat']);
        }

        if (array_key_exists('connection_parameters_provider', $value)) {
            $this->_usedProperties['connectionParametersProvider'] = true;
            $this->connectionParametersProvider = $value['connection_parameters_provider'];
            unset($value['connection_parameters_provider']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['port'])) {
            $output['port'] = $this->port;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }
        if (isset($this->_usedProperties['vhost'])) {
            $output['vhost'] = $this->vhost;
        }
        if (isset($this->_usedProperties['hosts'])) {
            $output['hosts'] = array_map(function ($v) { return $v->toArray(); }, $this->hosts);
        }
        if (isset($this->_usedProperties['lazy'])) {
            $output['lazy'] = $this->lazy;
        }
        if (isset($this->_usedProperties['connectionTimeout'])) {
            $output['connection_timeout'] = $this->connectionTimeout;
        }
        if (isset($this->_usedProperties['readWriteTimeout'])) {
            $output['read_write_timeout'] = $this->readWriteTimeout;
        }
        if (isset($this->_usedProperties['useSocket'])) {
            $output['use_socket'] = $this->useSocket;
        }
        if (isset($this->_usedProperties['sslContext'])) {
            $output['ssl_context'] = $this->sslContext;
        }
        if (isset($this->_usedProperties['keepalive'])) {
            $output['keepalive'] = $this->keepalive;
        }
        if (isset($this->_usedProperties['heartbeat'])) {
            $output['heartbeat'] = $this->heartbeat;
        }
        if (isset($this->_usedProperties['connectionParametersProvider'])) {
            $output['connection_parameters_provider'] = $this->connectionParametersProvider;
        }

        return $output;
    }

}
