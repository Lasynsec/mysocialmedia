<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Lasynsec\FrontBundle\Entity\Status;

class LoadStatusData implements FixtureInterface
{
  const MAX_NB_STATUS = 30; 
  public function load(ObjectManager $manager) 
  {
    $faker = \Faker\Factory::create(); // on instancie Faker.

    for($i = 0; $i < self::MAX_NB_STATUS;  ++$i){

      $status = new Status();
      $status->setContent($faker->text(250));
      $status->setDeleted($faker->boolean);

      $manager->persist($status);
    }

    $manager->flush();
  }
}