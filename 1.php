<?php
class Soalpertama{
	function biodata(){
		$data['name'] = "Andrean Yogatama";
		$data['age'] = 23;
		$data['address'] = "Jl. Bendungan Sutami Gang 1 no 20B Malang";
		$data['hobby'] = array("Bersepeda", "Ngoding");
		$data['is_merried'] = false;
		$data['list_school'] = array(
			"name" => "SMKN 4 MALANG",
			"year_in" => 2012,
			"year_out" => 2015,
			"major" => "Rekayasa Perangkat Lunak"
		);
		$data['skills'] = array(
			"skill_name" => "php",
			"level" => "beginner"
		);
		$data['interest_in_coding'] = true;
		return json_encode($data);
 	}
}

$kelas = new Soalpertama();
echo $kelas->biodata();
?>
