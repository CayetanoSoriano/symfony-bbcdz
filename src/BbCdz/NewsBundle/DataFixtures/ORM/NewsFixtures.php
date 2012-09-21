<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace BbCdz\NewsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BbCdz\NewsBundle\Entity\News;
use candgo\UserBundle\Entity\User;

class LoadNewsData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 4; $i++) {
          $user = new User();
          $user->setUsername('Usuario'.$i);
          $user->setEmail('usuario'.$i.'@usuario.com');
          $user->setPlainPassword('123');
          $user->setTelf($i);
          $user->setCodPostal('11500'.$i);
          $user->setCiudad('cádiz');
          $user->setPais('España');
          $user->setNombreYApellidos('a b c');
          $user->setNewslater(1);
          $user->setNewslater(1);
          $user->addRole('ROLE_USER');
          $user->setEnabled(true);
          $manager->persist($user);
      }
      for ($i=0; $i < 10; $i++) { 
        $new=new News();

        $new
        ->setTitle('Noticia '.$i)
        ->setText('Lorem ipsum Ut occaecat in in nisi enim cupidatat ut aliquip est commodo do adipisicing commodo aliqua anim adipisicing officia sunt mollit in magna elit nulla laborum est elit veniam sit in dolore eiusmod Ut in nisi labore sit tempor culpa dolore aliquip qui nostrud nostrud eu tempor cillum et esse commodo ut velit et et aliqua ullamco adipisicing nostrud qui dolore mollit eu ullamco eu elit anim et esse veniam sunt eu incididunt anim nulla magna culpa ullamco pariatur adipisicing in laborum laborum mollit in et incididunt ea sit proident nisi commodo nulla sed aliqua amet sit ut commodo non exercitation elit sunt sed aute in laborum id ullamco cupidatat id ex id fugiat amet irure aliquip nulla velit sed voluptate velit dolore id officia pariatur labore labore eu dolore nostrud nisi eiusmod ex irure anim esse ut sunt voluptate velit dolor aliqua adipisicing reprehenderit sint qui enim in sint aute sint irure magna ut ea aute enim sunt ea in in dolore labore quis quis adipisicing voluptate consequat sunt velit aliqua dolor et reprehenderit nisi Ut consequat deserunt tempor veniam tempor ut sunt culpa Ut in enim reprehenderit ut consectetur ut culpa ex dolore est mollit laboris cillum magna mollit ex et incididunt velit nisi ad nulla ut ullamco adipisicing. ')
        ->setDate(new \DateTime('NOW'))
        ;

        $manager->persist($new);
    }

    $manager->flush();
}
}