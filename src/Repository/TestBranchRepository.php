<?php

namespace App\Repository;

use App\Entity\TestBranch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TestBranch|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestBranch|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestBranch[]    findAll()
 * @method TestBranch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestBranchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestBranch::class);
    }

    // /**
    //  * @return TestBranch[] Returns an array of TestBranch objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestBranch
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
