<?php

namespace ContainerELxaT7V;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderff8cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8779c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties73e4f = [
        
    ];

    public function getConnection()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getConnection', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getMetadataFactory', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getExpressionBuilder', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'beginTransaction', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getCache', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'transactional', array('func' => $func), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'commit', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->commit();
    }

    public function rollback()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'rollback', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getClassMetadata', array('className' => $className), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'createQuery', array('dql' => $dql), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'createNamedQuery', array('name' => $name), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'createQueryBuilder', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'flush', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'clear', array('entityName' => $entityName), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->clear($entityName);
    }

    public function close()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'close', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->close();
    }

    public function persist($entity)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'persist', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'remove', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'refresh', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'detach', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'merge', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'contains', array('entity' => $entity), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getEventManager', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getConfiguration', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'isOpen', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getUnitOfWork', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getProxyFactory', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'initializeObject', array('obj' => $obj), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'getFilters', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'isFiltersStateClean', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'hasFilters', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return $this->valueHolderff8cf->hasFilters();
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

        $instance->initializer8779c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderff8cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderff8cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderff8cf->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, '__get', ['name' => $name], $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        if (isset(self::$publicProperties73e4f[$name])) {
            return $this->valueHolderff8cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff8cf;

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

        $targetObject = $this->valueHolderff8cf;
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
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff8cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderff8cf;
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
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, '__isset', array('name' => $name), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff8cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderff8cf;
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
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, '__unset', array('name' => $name), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderff8cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderff8cf;
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
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, '__clone', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        $this->valueHolderff8cf = clone $this->valueHolderff8cf;
    }

    public function __sleep()
    {
        $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, '__sleep', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;

        return array('valueHolderff8cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8779c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8779c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8779c && ($this->initializer8779c->__invoke($valueHolderff8cf, $this, 'initializeProxy', array(), $this->initializer8779c) || 1) && $this->valueHolderff8cf = $valueHolderff8cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderff8cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderff8cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
