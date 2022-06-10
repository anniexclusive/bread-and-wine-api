<?php

namespace App\Repository;

use App\Entity\BreadAndWine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BreadAndWine>
 *
 * @method BreadAndWine|null find($id, $lockMode = null, $lockVersion = null)
 * @method BreadAndWine|null findOneBy(array $criteria, array $orderBy = null)
 * @method BreadAndWine[]    findAll()
 * @method BreadAndWine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BreadAndWineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BreadAndWine::class);
    }

    public function add(BreadAndWine $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BreadAndWine $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BreadAndWine[] Returns an array of BreadAndWine objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BreadAndWine
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
