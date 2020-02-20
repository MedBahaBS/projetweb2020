<?php
/**
 * Created by PhpStorm.
 * User: HELLBOH
 * Date: 13/04/2019
 * Time: 14:13
 */

namespace ReclamationBundle\EventListener;


use AppBundle\Entity\User;
use Doctrine\ORM\Event\LifecycleEventArgs;

class BloquerPresttaire
{
// postPersist fonction predifini fi doctrine : ay objet saret 3lih persitance t9olek hani mawjouda chnowa t7eb taba9 3lih
// LifecycleEventArgs : c'est un objet passer en parametre


    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entityManager = $args->getObjectManager();

        if ($entity instanceof User) {
            if($entity->getScore()>= 5){
                $entity->setEnabled(0);
                $entityManager->persist($entity);
                $entityManager->flush();
            }
        }
    }

}