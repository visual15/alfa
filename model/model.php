<?php
	class model{
		function __construct(){
			$connect=mysql_connect("localhost","root","");
			$db=mysql_select_db("praktikumweb");
		}

		function execute($query){
			return mysql_query($query);
		}

		function selectall(){
			$query="select * from crud";
			return $this->execute($query);
		}

		function selectmhs($nim){
			$query="select * from crud where nim='$nim'";
			return $this->execute($query);
		}

		function updatemhs ($nim, $nama, $angkatan, $fakultas, $program, $id){
			$query="update crud set nim='$nim',nama='$nama',angkatan='$angkatan',fakultas='$fakultas',program='$program' where id='$id'";
			return $this->execute($query);
		}

		function deletemhs($nim){
			$query="delete from crud where nim='$nim'";
			return $this->execute($query);
		}

		function insertmhs ($nim, $nama, $angkatan, $fakultas, $program){
			$query="insert into crud (nim, nama, angkatan, fakultas, program) values ('$nim','$nama','$angkatan','$fakultas','program')";
			return $this->execute($query);
		}

		function fetch($var){
			return mysql_fetch_array($var);
		}

		function __destruct(){
		}

	}
?>