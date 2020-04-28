<?php

namespace App\Repository;

use App\Entity\UserRoleMaster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserRoleMaster|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRoleMaster|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRoleMaster[]    findAll()
 * @method UserRoleMaster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRoleMasterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRoleMaster::class);
    }

    // /**
    //  * @return UserRoleMaster[] Returns an array of UserRoleMaster objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserRoleMaster
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
