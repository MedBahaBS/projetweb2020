<?php


namespace EventsBundle\Repository;
use Doctrine\ORM\EntityRepository;

class EvenementRepository extends EntityRepository
{
    public function finParticipantName(){
        $qb= $this->getEntityManager()->createQuery('SELECT username 
        FROM EventsBundle:User u,EventsBundle:Participant p,EventsBundle:Evenement e 
        WHERE e.idevenement=p.idevenement
        AND p.ideleve=u.id');
        return $result = $qb->getResult();
    }
}