<?php

namespace ContainerVnWFnGx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9941c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer83a76 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties140ca = [
        
    ];

    public function getConnection()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getConnection', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getMetadataFactory', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getExpressionBuilder', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'beginTransaction', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getCache', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'transactional', array('func' => $func), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'commit', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->commit();
    }

    public function rollback()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'rollback', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getClassMetadata', array('className' => $className), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'createQuery', array('dql' => $dql), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'createNamedQuery', array('name' => $name), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'createQueryBuilder', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'flush', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'clear', array('entityName' => $entityName), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->clear($entityName);
    }

    public function close()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'close', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->close();
    }

    public function persist($entity)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'persist', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'remove', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'refresh', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'detach', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'merge', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'contains', array('entity' => $entity), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getEventManager', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getConfiguration', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'isOpen', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getUnitOfWork', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getProxyFactory', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'initializeObject', array('obj' => $obj), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'getFilters', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'isFiltersStateClean', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'hasFilters', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return $this->valueHolder9941c->hasFilters();
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

        $instance->initializer83a76 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9941c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9941c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9941c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, '__get', ['name' => $name], $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        if (isset(self::$publicProperties140ca[$name])) {
            return $this->valueHolder9941c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9941c;

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

        $targetObject = $this->valueHolder9941c;
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
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9941c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9941c;
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
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, '__isset', array('name' => $name), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9941c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9941c;
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
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, '__unset', array('name' => $name), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9941c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9941c;
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
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, '__clone', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        $this->valueHolder9941c = clone $this->valueHolder9941c;
    }

    public function __sleep()
    {
        $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, '__sleep', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;

        return array('valueHolder9941c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer83a76 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer83a76;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer83a76 && ($this->initializer83a76->__invoke($valueHolder9941c, $this, 'initializeProxy', array(), $this->initializer83a76) || 1) && $this->valueHolder9941c = $valueHolder9941c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9941c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9941c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
