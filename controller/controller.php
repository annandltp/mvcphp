<?php
	//include class model
	//Buat Website di WebsitePraktis.com
include "model/model.php";

class controller{
		//variabel public
	public $model;

		//inisialisasi awal untuk class
	function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, 
			//akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
			include "view/view.php"; //memamnggil view.php pada folder view
		}
		
		function viewEdit($id){
			$data = $this->model->select($id); //select data mahasiswa dengan nim ...
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/view_edit.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewInsert(){
			$data = $this->model->selectBook();
			include "view/view_add.php"; //menampilkan halaman add data
		}
		
		//fungsi updata data
		function update(){
			$ip = $_POST['ip'];
			$kode = $_POST['pilih'];
			$tanggal = $_POST['tanggal'];
			
			$update = $this->model->update($ip, $kode, $tanggal);
			
			header("location:index.php");
		}
		
		function delete($id){
			$delete = $this->model->delete($id);
			header("location:index.php");
		}
		
		function insert(){
			$kode = $_POST['pilih'];
			$tanggal = $_POST['tanggal'];
			
			
			$insert = $this->model->insert($kode, $tanggal);
			header("location:index.php");
		}
		
		function __destruct(){
		}
	}
	//Mau kenceng internetan di FiberOptik.co.id
	?>