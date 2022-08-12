<?php 
class RegisterUser{
	// Class properties
	private $username;
	private $userlogin;
	private $usermail;
	private $password;
	private $cpassword;
	private $encrypted_password;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;
	private $new_user; // array 


	public function __construct($username,$userlogin,$usermail, $password,$cpassword ){

	
		$this->username = $username;
		$this->userlogin=$userlogin;
		$this->usermail = $usermail;
		$this->password = $password;
		$this->encrypted_password = password_hash($this->password, PASSWORD_DEFAULT);
		$this->cpassword=$cpassword;
		$this->encrypted_password = password_hash($this->cpassword, PASSWORD_DEFAULT);

		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"username" => $this->username,
			"userlogin" => $this->userlogin,
			"usermail" => $this->usermail,
			"password" => $this->encrypted_password,
			"cpassword" => $this->encrypted_password,
		];

		if($this->checkFieldValues()){
			$this->insertUser();
		}
	}


	private function checkFieldValues(){
		if(empty($this->username) ){
			$this->error = "Все поля пустой.";

		}elseif (empty($this ->userlogin)) {
			$this->error = "Логин поля пустой.";
			
		}elseif (empty($this ->usermail)) {
			$this->error = "Email поля пустой.";
			
		}elseif (empty($this->password)) {
			$this->error = "Пароль поля пустой.";
			
		}elseif ($this->password!= $this->cpassword) {
			$this->error = "password должен совподать";
		}
		else{
			return true;
		}
	}


	private function usernameExists(){
		foreach($this->stored_users as $user){
			if($this->username == $user['username']){
				$this->error = "Имя пользователя уже занято, выберите другое";
				return true;
			}
		}
		return false;
	}


	private function insertUser(){
		if($this->usernameExists() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "Ваша регистрация прошла успешно";
			}else{
				return $this->error = "Что-то пошло не так. Пожалуйста, попытайтесь еще раз";
			}
		}
	}
} // end of class