<?php


namespace EventsBundle\Repository;
use Doctrine\ORM\EntityRepository;

class ParticipantRepository extends EntityRepository
{
    public function findParticipantNameAndID($idevenement){
        $qb= $this->getEntityManager()->createQuery('
        SELECT u.username, u.id
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

    public function findParticipantsEmails($idevenement){
        $qb= $this->getEntityManager()->createQuery('
        SELECT u.email
            FROM EventsBundle:User u,EventsBundle:Participant p
                WHERE p.idevenement = :idevenement
                    AND p.ideleve = u.id')
            ->setParameter('idevenement' , $idevenement);
        return $result = $qb->getResult();

    }
    public function findParticipant($ideleve,$idevenement ){
        $qb= $this->getEntityManager()->createQuery('
        SELECT u
            FROM EventsBundle:User u,EventsBundle:Participant p
                WHERE p.idevenement=:idevenement
                    AND p.ideleve=u.id
                        AND p.ideleve = :ideleve')
            ->setParameter('idevenement' , $idevenement)
            ->setParameter('ideleve' , $ideleve);
        return $result = $qb->getResult();
    }
}