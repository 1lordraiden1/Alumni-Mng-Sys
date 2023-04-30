<?php

class user{
    private $db;
    private $name;
    private $email;
    private $password;
    private $phone;
    private $pic;
    private $userID;

	/**
	 * @return mixed
	 */
	public function getUserID() {
		return $this->userID;
	}
	
	/**
	 * @param mixed $userID 
	 * @return self
	 */
	public function setUserID($userID): self {
		$this->userID = $userID;
		return $this;
	}
}





?>