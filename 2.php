<?php
class Soalkedua{
	public function cek_username($value)
	{

		if(
			preg_match("/[A-Z]/", $value) == 1 || 
			preg_match("/[0-9]/", $value) == 1 || 
			preg_match("/[!@#$%^&*()-=+[]{}\|:;''<>,.?]/", $value) == 1 || 
			substr($value, 0, 1) == "_" || 
			strlen($value) < 5 || 
			strlen($value) > 8
		  ){
    		return false;
		} else {
			
			return true;
		}
	}
	public function cek_password($value)
	{
			if(
			preg_match("/[A-Z]/", $value) == 0 || 
			preg_match("/[a-z]/", $value) == 0 ||
			preg_match("/[0-9]/", $value) == 0 || 
			preg_match("/[!]/", $value) == 0 ||  
			strlen($value) != 9
		  ){
    		return false;
		} else {
			
			return true;
		}
	}
	public function validasi($username, $password)
	{
		if($this->cek_password($password) == false && $this->cek_username($username) == false){
			return false;
		} else {
			return true;
		}
	}	
}

$kelas = new Soalkedua();
echo $kelas->validasi("andren_","aA0!aA0!!");
?>