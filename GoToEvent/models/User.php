<?php
namespace models;

/**
 * 
 */
class User
{
	private $dni;
	private $email;
	private $last_name;
	private $name;
	
	function __construct($name='',$last_name='',$email='',$dni='')
	{
		$this->name = $name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->dni = $dni;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getEmail()
	{
		return $this->email_;
	}

	public function getDni()
	{
		return $this->dni;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setLastName($last_name)
	{
		$this->last_name = $last_name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setDni($dni)
	{
		$this->dni = $dni;
	}
}

?>