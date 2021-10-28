<?php

namespace Container4wuW074;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2dbf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93823 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties53c23 = [
        
    ];

    public function getConnection()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getConnection', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getMetadataFactory', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getExpressionBuilder', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'beginTransaction', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getCache', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'transactional', array('func' => $func), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->transactional($func);
    }

    public function commit()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'commit', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->commit();
    }

    public function rollback()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'rollback', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getClassMetadata', array('className' => $className), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'createQuery', array('dql' => $dql), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'createNamedQuery', array('name' => $name), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'createQueryBuilder', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'flush', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'clear', array('entityName' => $entityName), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->clear($entityName);
    }

    public function close()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'close', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->close();
    }

    public function persist($entity)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'persist', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'remove', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'refresh', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'detach', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'merge', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'contains', array('entity' => $entity), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getEventManager', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getConfiguration', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'isOpen', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getUnitOfWork', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getProxyFactory', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'initializeObject', array('obj' => $obj), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'getFilters', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'isFiltersStateClean', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'hasFilters', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return $this->valueHoldera2dbf->hasFilters();
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

        $instance->initializer93823 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2dbf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2dbf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2dbf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, '__get', ['name' => $name], $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        if (isset(self::$publicProperties53c23[$name])) {
            return $this->valueHoldera2dbf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2dbf;

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

        $targetObject = $this->valueHoldera2dbf;
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
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2dbf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2dbf;
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
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, '__isset', array('name' => $name), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2dbf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2dbf;
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
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, '__unset', array('name' => $name), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2dbf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2dbf;
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
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, '__clone', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        $this->valueHoldera2dbf = clone $this->valueHoldera2dbf;
    }

    public function __sleep()
    {
        $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, '__sleep', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;

        return array('valueHoldera2dbf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93823 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93823;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93823 && ($this->initializer93823->__invoke($valueHoldera2dbf, $this, 'initializeProxy', array(), $this->initializer93823) || 1) && $this->valueHoldera2dbf = $valueHoldera2dbf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2dbf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2dbf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
