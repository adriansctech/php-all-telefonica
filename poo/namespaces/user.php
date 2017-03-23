<?php 
declare(strict_types=1);
namespace UserNamesPace;

class User
{
	public $username;
	public $email;

	public function __construct(
		string $username,
		string $email
	){
		$this->username = $username;
		$this->email = $email;
	}
}



?>
