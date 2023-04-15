<?php

namespace App\Repository;

use App\Entity\Commentarys;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commentarys>
 *
 * @method Commentarys|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commentarys|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commentarys[]    findAll()
 * @method Commentarys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentarysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commentarys::class);
    }

    public function add(Commentarys $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Commentarys $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
