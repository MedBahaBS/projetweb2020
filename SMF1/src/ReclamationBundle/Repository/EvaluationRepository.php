<?php

namespace ReclamationBundle\Repository;

/**
 * EvaluationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvaluationRepository extends \Doctrine\ORM\EntityRepository
{
    public  function NonEvaluer($id){

    $dqlresult=$this->getEntityManager()
        ->createQuery("SELECT n FROM AppBundle:User n , ReclamationBundle:Evaluation e WHERE e.user=$id and e.target != n.id");

    return $dqlresult->getResult();
}

    public  function NonEval(){

        $dqlresult=$this->getEntityManager()
            ->createQuery("SELECT e.target FROM  ReclamationBundle:Evaluation e where e. ");
        return $dqlresult->getResult();
    }

 /*   public function statEvaluation()
    {
        $query = $this->getEntityManager()->createQuery("SELECT COUNT (e.id as nbr, (e.nbrEtoiles as nbrEtoiles from ReclamationBundle:Evaluation as e group by e.nbrEtoiles");
        return $query->getResult();
    }*/





}
