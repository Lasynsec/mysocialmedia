<?php

namespace Lasynsec\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Lasynsec\FrontBundle\Entity\User;
use Lasynsec\FrontBundle\Entity\Status;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface 
{
  const MAX_NB_USERS = 10; // Let's create 10 users.

  public function load(ObjectManager $manager) 
  {
    $faker = \Faker\Factory::create(); // on instancie Faker.

    for($i = 0; $i < self::MAX_NB_USERS;  ++$i){

      $user = new User();
      $user->setUsername($faker->username); // names are adding randomly.

      $manager->persist($user);
      $this->addReference('user'.$i,$user); // we add a reference on the object to easily get it.
    }

    $manager->flush();
  }

  public function getOrder(){ // Allow to create object in a ascending order.
    return 1; // Will be the first object insered in the database.
  }
}