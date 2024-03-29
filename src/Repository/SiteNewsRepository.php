<?php

namespace App\Repository;

use App\Entity\SiteNews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SiteNews|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteNews|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteNews[]    findAll()
 * @method SiteNews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteNewsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SiteNews::class);
    }

    // /**
    //  * @return SiteNews[] Returns an array of SiteNews objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SiteNews
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
