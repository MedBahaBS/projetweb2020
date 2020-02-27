<?php


namespace EventsBundle\Repository;
use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function myfindByLibelle($libelle){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT c
                    FROM EventsBundle:Categorie c
                        WHERE c.libelle LIKE :libelle')
            ->setParameter('libelle', '%'.$libelle.'%');
        return $result = $qb->getResult();
    }

    public function myfindByDescription($description){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT c
                    FROM EventsBundle:Categorie c
                        WHERE c.description LIKE :description')
            ->setParameter('description', '%'.$description.'%');
        return $result = $qb->getResult();
    }
}