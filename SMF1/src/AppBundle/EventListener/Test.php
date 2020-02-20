<?php
/**
 * Created by PhpStorm.
 * User: HELLBOH
 * Date: 13/04/2019
 * Time: 15:54
 */

namespace AppBundle\EventListener;


use AppBundle\Entity\BlaBla;
use Doctrine\ORM\Event\LifecycleEventArgs;

class Test
{

    public function postPersist(LifecycleEventArgs $args){

        $object = $args->getObject();
        $manager = $args->getObjectManager();

        if($object instanceof BlaBla){
            $blabla = new BlaBla();
            $blabla->setNom('test form listener');
            $manager->persist($blabla);
            $manager->flush();
        }
    }

}