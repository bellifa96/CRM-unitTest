<?php

namespace App\Repository;

use App\Entity\Me;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Me|null find($id, $lockMode = null, $lockVersion = null)
 * @method Me|null findOneBy(array $criteria, array $orderBy = null)
 * @method Me[]    findAll()
 * @method Me[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Me::class);
    }

    // /**
    //  * @return Me[] Returns an array of Me objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Me
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
