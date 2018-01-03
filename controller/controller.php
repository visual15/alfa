<?php
   	//include class model
	include "model/model.php";

	class controller{
		//variabel public
		public $model;
		//inisialisasi awal untuk class
		function __contruct(){
			$this->model=new model(); //variabel model merupakan objek baru yg dibuat dari class model
		}

		function index(){
			$data=$this->model->selectall(); //pada class ini (controller), akses variabel model, akses fungsi
			include "view/view.php"; //memanggil view.php pada folder view
		}

		function viewedit($nim){
			$data=$this->model->selectmhs($nim); //select data mhs dengan nim
			$row=$this->model->fetch($data); //fetch hasil select
			include "view/view.php"; //menampilkan halaman untuk mengedit data
		}

		function viewinsert(){
			include "view/view_add.php"; //menampilkan halaman add data
		}
		//fungsi update data
		function update(){
			$nim=$_POST['nim'];
			$nama=$_POST['nama'];
			$angkatan=$_POST['angkatan'];
			$fakultas=$_POST['fakultas'];
			$program=$_POST['program'];

			$update=$this->model->updatemhs($nim, $nama, $angkatan, $fakultas, $program);
			header("location:index.php");
		}

		function delete($nim){
			$delete=$this->model->deletemhs($nim);
			header("location:index.php");
		}

		function insert(){
			$nim=$_POST['nim'];
			$nama=$_POST['nama'];
			$angkatan=$_POST['angkatan'];
			$fakultas=$_POST['fakultas'];
			$program=$_POST['program'];

			$insert=$this->model->insertmhs($nim, $nama, $angkatan, $fakultas, $program);
			header("location:index.php");
		}

		function __destruct(){
		}
	}

?>