<?php

namespace App\DataFixtures;

use App\Entity\Admin\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminFixture extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new Admin;
        $user->setUsername("renlikang");
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            "123456"
        ));
        $manager->flush();
    }
}
