<?php 

class Mahasiswa_model{
	private $mhs = [
		[
			"nama" => "Hadi Prasetyo",
			"nim" => "2016150036",
		 	"email" => "hadipsy27@gmail.com",
			"jurusan" => "Teknik Informatika"
		 ],
		 [
			"nama" => "dody Fimansyah",
			"nim" => "2019180045",
		 	"email" => "dodyf@gmail.com",
			"jurusan" => "Teknik Industri"
		 ],
		 [
			"nama" => "Fatkhur oji coba",
			"nim" => "2016150098",
		 	"email" => "ojicoba@gmail.com",
			"jurusan" => "Teknik Penyesalan"
		 ],
		 [
			"nama" => "Gopal Noval Gopay",
			"nim" => "2019380009",
		 	"email" => "gopalgopay@gmail.com",
			"jurusan" => "Teknik Kegilaan"
		 ],
		 [
			"nama" => "Sika tenan",
			"nim" => "2015180001",
		 	"email" => "sikerlah@gmail.com",
			"jurusan" => "Teknik Kesetresan"
		 ],
		 [
			"nama" => "atoq astikoh",
			"nim" => "2010100011",
		 	"email" => "atoqatikf@gmail.com",
			"jurusan" => "Teknik Bodo Amat"
		 ],
		 [
			"nama" => "Gemblung sangat",
			"nim" => "2011110005",
		 	"email" => "Gemblung@gmail.com",
			"jurusan" => "Teknik bego"
		 ],
		 [
			"nama" => "bajigur enak",
			"nim" => "2019140211",
		 	"email" => "bajigur@gmail.com",
			"jurusan" => "Teknik Minuman"
		 ],
		 [
			"nama" => "Bayi Bajang",
			"nim" => "2017110016",
		 	"email" => "Bajang@gmail.com",
			"jurusan" => "Teknik anak dewasa"
		 ],
		 [
			"nama" => "Bayi Iblis",
			"nim" => "2019180099",
		 	"email" => "blezeup@gmail.com",
			"jurusan" => "Teknik Storm"
		]
	];

	public function getAllMahasiswa(){
		return $this->mhs;
	}
}
