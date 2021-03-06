<?php
namespace Tests\Unit;

use Mockery as M;
use Mockery\MockInterface;
use PHPUnit_Framework_TestCase;
use Doctrine\ORM\EntityManager;

abstract class AbstractUnitTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @param string $entityClass
     * @return \Mockery\MockInterface
     */
    public function getEntityManagerMock($entityClass = null)
    {
        $emMock = M::mock(EntityManager::class);
        $emMock->shouldReceive('persist');
        $emMock->shouldReceive('remove');
        $emMock->shouldReceive('flush');

        if ($entityClass) {
            $emMock->shouldReceive('find')->andReturn(M::mock($entityClass)->makePartial());
            $emMock->shouldReceive('getRepository')->andReturn($this->getRepositoryMock($entityClass));
        }
        return $emMock;
    }

    /**
     * @param string $entityClass
     * @return MockInterface
     */
    public function getRepositoryMock($entityClass = null)
    {
        $nsParts = explode('\\', $entityClass);
        $nsParts[array_search('Entity', $nsParts)] = 'Repository';
        $repositoryClass = implode('\\', $nsParts) . 'Repository';

        $entity = M::mock($entityClass)->makePartial();

        $repoMock = M::mock($repositoryClass);
        $repoMock->shouldReceive('find')->andReturn($entity);
        $repoMock->shouldReceive('findBy')->andReturn([$entity]);
        $repoMock->shouldReceive('findOneBy')->andReturn($entity);
        $repoMock->shouldReceive('findAll')->andReturn([$entity]);

        return $repoMock;
    }
}