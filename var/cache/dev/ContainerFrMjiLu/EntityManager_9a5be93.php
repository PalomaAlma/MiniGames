<?php

namespace ContainerFrMjiLu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder25618 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd54c7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28640 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getConnection', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getMetadataFactory', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getExpressionBuilder', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'beginTransaction', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getCache', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'transactional', array('func' => $func), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->transactional($func);
    }

    public function commit()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'commit', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->commit();
    }

    public function rollback()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'rollback', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getClassMetadata', array('className' => $className), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'createQuery', array('dql' => $dql), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'createNamedQuery', array('name' => $name), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'createQueryBuilder', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'flush', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'clear', array('entityName' => $entityName), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->clear($entityName);
    }

    public function close()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'close', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->close();
    }

    public function persist($entity)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'persist', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'remove', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'refresh', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'detach', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'merge', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'contains', array('entity' => $entity), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getEventManager', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getConfiguration', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'isOpen', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getUnitOfWork', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getProxyFactory', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'initializeObject', array('obj' => $obj), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'getFilters', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'isFiltersStateClean', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'hasFilters', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return $this->valueHolder25618->hasFilters();
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

        $instance->initializerd54c7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder25618) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder25618 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder25618->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, '__get', ['name' => $name], $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        if (isset(self::$publicProperties28640[$name])) {
            return $this->valueHolder25618->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25618;

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

        $targetObject = $this->valueHolder25618;
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
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25618;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25618;
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
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, '__isset', array('name' => $name), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25618;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder25618;
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
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, '__unset', array('name' => $name), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25618;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder25618;
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
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, '__clone', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        $this->valueHolder25618 = clone $this->valueHolder25618;
    }

    public function __sleep()
    {
        $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, '__sleep', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;

        return array('valueHolder25618');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd54c7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd54c7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd54c7 && ($this->initializerd54c7->__invoke($valueHolder25618, $this, 'initializeProxy', array(), $this->initializerd54c7) || 1) && $this->valueHolder25618 = $valueHolder25618;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder25618;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder25618;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
