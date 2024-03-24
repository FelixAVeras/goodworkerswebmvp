<?php

class User {
	public string $firstname;
	public ?string $middlename;
	public string $lastname;
	public $birthdate;
	public $phone;
	public $email;

	public function __construct($firstname, $middlename, $lastname, $birthdate, $phone, $email) {
		$this->firstname = $firstname;
		$this->middlename = $middlename;
		$this->lastname = $lastname;
		$this->birthdate = new DateTime($birthdate);
		$this->phone = $phone;
		$this->email = $email;
	}

	public function showUserInfo() {
		echo '<strong>Nombre completo: </strong>' . $this->firstname . ' ' . $this->middlename . ' ' . $this->lastname . '<br/>';
		echo '<strong>Fecha de Cumpleaños: </strong>' . $this->birthdate->format('d-m-Y') . '<br/>';
		echo '<strong>Telefono: </strong>' . $this->phone . '<br/>';
		echo '<strong>Correo Electronico: </strong>' . $this->email . '<br/>';
	}
}

?>