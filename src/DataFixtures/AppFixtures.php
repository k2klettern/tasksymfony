<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
	private $passwordEncoder;

	public function __construct(UserPasswordEncoderInterface $passwordEncoder)
	{
		$this->passwordEncoder = $passwordEncoder;
	}

	public function load(ObjectManager $manager)
	{
		foreach ($this->getUserData() as [$fullname, $username, $password, $email, $roles]) {
			$user = new User();
			$user->setFullName($fullname);
			$user->setUsername($username);
			$user->setPassword($this->passwordEncoder->encodePassword($user, $password));
			$user->setEmail($email);
			$user->setRoles($roles);

			$manager->persist($user);
			$this->addReference($username, $user);
		}

		$manager->flush();
	}

	private function getUserData(): array
	{
		return [
			// $userData = [$fullname, $username, $password, $email, $roles];
			['Eric Zeidan', 'ezeidan', 'derhund', 'k2klettern@gmail.com', ['ROLE_ADMIN']],
			['An User', 'an_user', 'kitten', 'an_user@symfony.com', ['ROLE_ADMIN']],
		];
	}


}