<?php

namespace App\Repository;

use App\Entity\AnalyseType1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AnalyseType1|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnalyseType1|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnalyseType1[]    findAll()
 * @method AnalyseType1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnalyseType1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnalyseType1::class);
    }

    // /**
    //  * @return AnalyseType1[] Returns an array of AnalyseType1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AnalyseType1
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
