<?php


namespace EventsBundle\Repository;
use Doctrine\ORM\EntityRepository;

class ParticipantRepository extends EntityRepository
{
    public function findParticipantNameAndID($idevenement){
        $qb= $this->getEntityManager()->createQuery('SELECT u.username, u.id
        FROM EventsBundle:User u,EventsBundle:Participant p
        WHERE p.idevenement=:idevenement
        AND p.ideleve=u.id')
            ->setParameter('idevenement' , $idevenement);
        return $result = $qb->getResult();
    }

    public function findParticipantsNumber($idevenement){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT COUNT(p.ideleve) as nb
                    FROM EventsBundle:Participant p
                        WHERE p.idevenement=:idevenement')
            ->setParameter('idevenement' , $idevenement);
        return $result = $qb->getResult();
    }
    public function findByTitre($titre){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT *
                    FROM EventsBundle:Evenement e
                        WHERE e.titre LIKE :titre
                        AND e.etat = :etat')
            ->setParameter('titre','%'.$titre.'%')
            ->setParameter('etat' , 1);
        return $result = $qb->getResult();
    }
    public function findByDate($date){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT * 
                    FROM EventsBundle:Evenement e
                        WHERE e.date = :date
                        AND e.etat = :etat')
            ->setParameter('date' , $date)
            ->setParameter('etat' , 1);
        return $result = $qb->getResult();
    }
    public function findByLieu($lieu){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT * 
                    FROM EventsBundle:Evenement e
                        WHERE e.lieu LIKE :lieu
                        AND e.etat = :etat')
            ->setParameter('lieu' , $lieu)
            ->setParameter('etat' , 1);
        return $result = $qb->getResult();
    }
    public function findByCategorie($categorie){
        $qb= $this->getEntityManager()->createQuery(
            'SELECT * 
                    FROM EventsBundle:Evenement e
                        WHERE e.categorie LIKE :categorie
                        AND e.etat = :etat')
            ->setParameter('lieu' , $categorie)
            ->setParameter('etat' , 1);
        return $result = $qb->getResult();
    }
}