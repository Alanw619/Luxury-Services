<?php

namespace App\Repository;

use App\Entity\InfosAdminCandidate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfosAdminCandidate|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfosAdminCandidate|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfosAdminCandidate[]    findAll()
 * @method InfosAdminCandidate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosAdminCandidateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfosAdminCandidate::class);
    }

    // /**
    //  * @return InfosAdminCandidate[] Returns an array of InfosAdminCandidate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfosAdminCandidate
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
