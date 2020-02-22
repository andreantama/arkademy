<?php
/**
 * 
 */
class Soalnomortiga
{
	public function perulanganakan($akhir)
	{
		$awal = 1;
		if(is_numeric($akhir) == true){
			for($awal = 1; $awal <= $akhir; $awal++){
				if($awal%3 == 0 && $awal%7 != 0){
					echo " Arka,";
				}
				else if($awal%7 == 0 && $awal%3 != 0){
					echo " Demy,";
				} else if($awal%7 == 0 && $awal%3 == 0) {
					echo " Arkademy,";
				} else {
					echo " ".$awal.",";
				}

			}
		} else {
			echo "Input harus angka!";
		}
	}
}
$kelas = new Soalnomortiga;
$kelas->perulanganakan(100);
?>