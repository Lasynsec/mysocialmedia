<?php

namespace Lasynsec\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Lasynsec\FrontBundle\Entity\User;
use Lasynsec\FrontBundle\Entity\Status;

class LoadStatusData extends AbstractFixture implements OrderedFixtureInterface 
{
  const MAX_NB_STATUS = 30;

  public function load(ObjectManager $manager) 
  {
    $faker = \Faker\Factory::create(); // we instanciate faker.

    for($i = 0; $i < self::MAX_NB_STATUS;  ++$i){

      $status = new Status();
      $status->setContent($faker->text(250));
      $status->setDeleted($faker->boolean);

      $user = $this->getReference('user'.rand(0,9)); // We get the linked user associated to the reference.
      $status->setUser($user); // We get the proper user.

      $manager->persist($status);
    }

    $manager->flush();
  }

  public function getOrder(){
    return 2; // Will be the second object insered in the database.
  }
}