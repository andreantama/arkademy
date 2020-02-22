<?php
/**
 * 
 */
class Soalnomorlima 
{
	
	function is_anagram($a, $b) {
    	return(count_chars($a, 1) == count_chars($b, 1));
	}
	function hasil($data){
		session_start();
		$jumlah_array = count($data);
		$hasil = array();
		//$hasil["h"] = "h";
		for($i = 0; $i<$jumlah_array; $i++){
			$array_now = $data[$i];
			$array_pasangan = $i + 1;
			$array_batas = $jumlah_array - 1;
			while ($array_pasangan <= $array_batas) {
				if($this->is_anagram($array_now, $data[$array_pasangan]) == true){
					$jumlahhuruf = strlen($array_now);
					if(!isset($_SESSION[$data[$array_pasangan]])){
						if(isset($_SESSION[$array_now])){
							$idses = $_SESSION[$array_now];
							$hasil[$idses][] = $data[$array_pasangan];
							$_SESSION[$data[$array_pasangan]]= $idses;

						} else{
							$hitung = count($hasil) + 1;
							$hasil[$hitung][] = $data[$array_pasangan];
							$_SESSION[$data[$array_pasangan]]= $hitung;
						}		
					}
					if(!isset($_SESSION[$array_now])){
						if(isset($_SESSION[$data[$array_pasangan]])){
							$idses = $_SESSION[$data[$array_pasangan]];
							$hasil[$idses][] = $array_now;
							$_SESSION[$array_now]= $idses;
						} else {
							$hitung = count($hasil) + 1;
							$hasil[$jumlahhuruf][$hitung] = $array_now;
							$_SESSION[$array_now]= $hitung;
						}
						
					}
				}
				$array_pasangan++;
			}
		}
		session_destroy();
		echo "Input : ".json_encode($data)."<br>";
		for ($i=1; $i <= count($hasil); $i++) { 
			echo "Anagram ".$i." : ".join(" ",$hasil[$i]). "<br>";;
		}

	}
}
$kelas = new Soalnomorlima;
$data[] = "agoy";
$data[] = "cat";
$data[] = "tac";
$data[] = "yoga";
$data[] = "goya";
$data[] = "act";
$data[] = "honj";
$data[] = "john";
echo $kelas->hasil($data);
$hasil = array(
	0 => array("agoy", "yoga"),
	1 => array("act", "cat"),
);
?>
