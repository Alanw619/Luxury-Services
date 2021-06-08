<?php

namespace App\Repository;

use App\Entity\InfosAdminClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfosAdminClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfosAdminClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfosAdminClient[]    findAll()
 * @method InfosAdminClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosAdminClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfosAdminClient::class);
    }

    // /**
    //  * @return InfosAdminClient[] Returns an array of InfosAdminClient objects
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
    public function findOneBySomeField($value): ?InfosAdminClient
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
