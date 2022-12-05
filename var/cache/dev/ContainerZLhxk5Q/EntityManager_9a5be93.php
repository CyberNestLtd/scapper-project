<?php

namespace ContainerZLhxk5Q;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd1c6c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercabbc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa0577 = [
        
    ];

    public function getConnection()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getConnection', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getMetadataFactory', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getExpressionBuilder', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'beginTransaction', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getCache', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getCache();
    }

    public function transactional($func)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'transactional', array('func' => $func), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'wrapInTransaction', array('func' => $func), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'commit', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->commit();
    }

    public function rollback()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'rollback', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getClassMetadata', array('className' => $className), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'createQuery', array('dql' => $dql), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'createNamedQuery', array('name' => $name), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'createQueryBuilder', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'flush', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'clear', array('entityName' => $entityName), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->clear($entityName);
    }

    public function close()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'close', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->close();
    }

    public function persist($entity)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'persist', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'remove', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'refresh', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'detach', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'merge', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getRepository', array('entityName' => $entityName), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'contains', array('entity' => $entity), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getEventManager', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getConfiguration', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'isOpen', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getUnitOfWork', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getProxyFactory', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'initializeObject', array('obj' => $obj), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'getFilters', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'isFiltersStateClean', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'hasFilters', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return $this->valueHolderd1c6c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializercabbc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd1c6c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd1c6c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd1c6c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, '__get', ['name' => $name], $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        if (isset(self::$publicPropertiesa0577[$name])) {
            return $this->valueHolderd1c6c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1c6c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1c6c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1c6c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1c6c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, '__isset', array('name' => $name), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1c6c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd1c6c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, '__unset', array('name' => $name), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1c6c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd1c6c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, '__clone', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        $this->valueHolderd1c6c = clone $this->valueHolderd1c6c;
    }

    public function __sleep()
    {
        $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, '__sleep', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;

        return array('valueHolderd1c6c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercabbc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercabbc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercabbc && ($this->initializercabbc->__invoke($valueHolderd1c6c, $this, 'initializeProxy', array(), $this->initializercabbc) || 1) && $this->valueHolderd1c6c = $valueHolderd1c6c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd1c6c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd1c6c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
