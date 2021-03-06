<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User implements UserInterface, \Serializable
{
	/**
	 * @var int
	 *
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	private $fullName;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", unique=true)
	 */
	private $username;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", unique=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	private $password;

	/**
	 * @var array
	 *
	 * @ORM\Column(type="json")
	 */
	private $roles = [];

	public function getId(): int
	{
		return $this->id;
	}

	public function setFullName(string $fullName): void
	{
		$this->fullName = $fullName;
	}

	public function getFullName(): string
	{
		return $this->fullName;
	}

	public function getUsername(): string
	{
		return $this->username;
	}

	public function setUsername(string $username): void
	{
		$this->username = $username;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function getPassword(): string
	{
		return $this->password;
	}

	public function setPassword(string $password): void
	{
		$this->password = $password;
	}

	public function getRoles(): array
	{
		$roles = $this->roles;

		if (empty($roles)) {
			$roles[] = 'ROLE_USER';
		}

		return array_unique($roles);
	}

	public function setRoles(array $roles): void
	{
		$this->roles = $roles;
	}

	/**
	 *
	 * {@inheritdoc}
	 */
	public function getSalt(): ?string
	{

		return null;
	}

	/**
	 *
	 * {@inheritdoc}
	 */
	public function eraseCredentials(): void
	{
		// $this->plainPassword = null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function serialize(): string
	{
		return serialize([$this->id, $this->username, $this->password]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function unserialize($serialized): void
	{
		[$this->id, $this->username, $this->password] = unserialize($serialized, ['allowed_classes' => false]);
	}
}