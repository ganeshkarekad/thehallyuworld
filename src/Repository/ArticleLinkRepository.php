<?php

namespace App\Repository;

use App\Entity\ArticleLink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ArticleLink|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleLink|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleLink[]    findAll()
 * @method ArticleLink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleLinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleLink::class);
    }

    // /**
    //  * @return ArticleLink[] Returns an array of ArticleLink objects
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
    public function findOneBySomeField($value): ?ArticleLink
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
