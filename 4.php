<?php
/**
 * 
 */
class Soalnomorempat
{
	
	public function perhitungan($input)
	{
			$input = $text = str_replace(' ', '', $input);
			if(is_numeric($input) == true){
			$angka = strval($input);
			} else {
				$angka = $input;
			}
			$jumlah_karakter = strlen($angka);
			$jangkep = $jumlah_karakter/3;
			$sisa = $jumlah_karakter%3;
			$data = array();
			$hasil = "";
			if($sisa == 0){
				$i = 1;
				$awal = 0;
				while($i <= $jangkep){
					$kali = ($i * 3) - 1;
					while ($awal <= $kali) {
						$hasil .= $angka[$awal];
						$awal++;
					}
					if($i != $jangkep){
						$hasil .= "-";
					}
					$i++;
				}
			} else if($sisa == 1){
				$i = 1;
				$awal = 0;
				$jangkep = $jangkep - 1;
				while($i <= $jangkep){
					$kali = ($i * 3) - 1;
					while ($awal <= $kali) {
						$hasil .= $angka[$awal];
						$awal++;
					}
					if($i != $jangkep){
						$hasil .= "-";
					}
					$i++;
				}
				$ii = $awal + 1;
				$awallagi = 1;
				while($ii <= $jumlah_karakter){
					$hasil .= $angka[$awal];
					if($awallagi%2 == 0 && $ii != $jumlah_karakter){
						$hasil .= "-";
					}
					$awallagi++;
					$awal++;
					$ii++;
				}


			} else if($sisa == 2){
				$i = 1;
				$awal = 0;
				while($i <= $jangkep){
					$kali = ($i * 3) - 1;
					while ($awal <= $kali) {
						$hasil .= $angka[$awal];
						$awal++;
					}
					if($i != $jangkep){
						$hasil .= "-";
					}
					$i++;
				}
				$ii = $awal + 1;
				while($ii <= $jumlah_karakter){
					$hasil .= $angka[$awal];
					$awal++;
					$ii++;
				}
			}
			return $hasil;
		}
}
$kelas = new Soalnomorempat;
echo $kelas->perhitungan("Red Wacky League Antlez Broke the Stereo Neon Tide Bring Back");
?>