<?php


namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userClient = new User();
        $userClient->setUsername('klientas');
        $userClient->setPlainPassword('test');
        $userClient->setEmail('klientas@klientas.lt');
        $userClient->setEnabled(true);
        $userClient->setRoles(array('ROLE_CLIENT'));
        $userClient->setCity('Vilnius');
        $userClient->setName('Aurimas');
        $userClient->setSurname('Vanagas');
        $userClient->setPhone('869999999');
        $userClient->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages/');
        $userClient->setAvatar('658b645d80c5789389a771cd340ee798.png');

        $manager->persist($userClient);
        $manager->flush();


        $userTrainer = new User();
        $userTrainer->setUsername('treneris');
        $userTrainer->setPlainPassword('test');
        $userTrainer->setEmail('treneris@treneris.lt');
        $userTrainer->setEnabled(true);
        $userTrainer->setRoles(array('ROLE_TRAINER'));
        $userTrainer->setCity('Vilnius');
        $userTrainer->setName('Aurimas');
        $userTrainer->setSurname('Vanagas');
        $userTrainer->setPhone('869999999');
        $userTrainer->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages/');
        $userTrainer->setAvatar('658b645d80c5789389a771cd340ee798.png');
        $manager->persist($userTrainer);
        $manager->flush();

        $userTrainer = new User();
        $userTrainer->setUsername('treneris1');
        $userTrainer->setPlainPassword('test');
        $userTrainer->setEmail('treneris1@treneris1.lt');
        $userTrainer->setEnabled(true);
        $userTrainer->setRoles(array('ROLE_TRAINER'));
        $userTrainer->setCity('Vilnius');
        $userTrainer->setName('Marek');
        $userTrainer->setSurname('Zavoronok');
        $userTrainer->setPhone('869999999');
        $userTrainer->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages/');
        $userTrainer->setAvatar('63e3264cd41e7e79e5e86dab50ac22d5.png');
        $manager->persist($userTrainer);
        $manager->flush();

        $userTrainer = new User();
        $userTrainer->setUsername('Kažkoks Treneris');
        $userTrainer->setPlainPassword('test');
        $userTrainer->setEmail('treneris2@treneris1.lt');
        $userTrainer->setEnabled(true);
        $userTrainer->setRoles(array('ROLE_TRAINER'));
        $userTrainer->setCity('Vilnius');
        $userTrainer->setName('Marek');
        $userTrainer->setSurname('Zavoronok');
        $userTrainer->setPhone('869999999');
        $userTrainer->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages/');
        $userTrainer->setAvatar('63e3264cd41e7e79e5e86dab50ac22d5.png');

        $manager->persist($userTrainer);
        $manager->flush();
    }
}