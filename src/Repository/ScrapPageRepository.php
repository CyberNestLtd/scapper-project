<?php

namespace App\Repository;

use App\Entity\ScrapPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ScrapPage>
 *
 * @method ScrapPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScrapPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScrapPage[]    findAll()
 * @method ScrapPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScrapPageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScrapPage::class);
    }

    public function save(ScrapPage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ScrapPage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
