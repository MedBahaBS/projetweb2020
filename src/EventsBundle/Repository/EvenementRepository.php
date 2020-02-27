<?php


namespace EventsBundle\Repository;
use Doctrine\ORM\EntityRepository;

class EvenementRepository extends EntityRepository
{
    public function myfindByTitre($titre){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT e
                    FROM EventsBundle:Evenement e
                        WHERE e.titre LIKE :titre
                        AND e.etat = 1')
            ->setParameter('titre', '%'.$titre.'%');
        return $result = $qb->getResult();
    }

    public function myfindByDate($date){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT e 
                    FROM EventsBundle:Evenement e
                        WHERE e.date >= :date
                        AND e.etat = 1')
            ->setParameter('date' , $date)
            ;
        return $result = $qb->getResult();
    }

    public function myfindByLieu($lieu){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT e
                    FROM EventsBundle:Evenement e
                        WHERE e.lieu LIKE :lieu
                        AND e.etat = 1')
            ->setParameter('lieu' , '%'.$lieu.'%');
        return $result = $qb->getResult();
    }

    public function myfindEvenement(){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT e
                    FROM EventsBundle:Evenement e
                        WHERE e.date >= :date
                        AND e.etat = 1')
            ->setParameter('date' , new \DateTime())
            ;
        return $result = $qb->getResult();
    }

    public function myfindEvenementPasse(){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT e
                    FROM EventsBundle:Evenement e
                        WHERE e.date <= :date
                        AND e.etat = 1')
            ->setParameter('date' , new \DateTime())
        ;
        return $result = $qb->getResult();
    }
}