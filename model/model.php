<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		//Buat Website di WebsitePraktis.com
		function __construct(){
			$connect = mysql_connect("localhost", "root","12345678");
			$db = mysql_select_db("web_pinjam");
		}
		
		function execute($query){
			return mysql_query($query);
		}
		
		function selectBook(){
			$query = "select * from buku";
			return $this->execute($query);
		}

		function selectAll(){
			$query = "select pinjam.id_pinjam,pinjam.kode_buku,buku.judul_buku,pinjam.tgl_pinjam from pinjam 
			JOIN buku ON pinjam.kode_buku = buku.kode_buku";
			return $this->execute($query);
		}
		
		function select($id){
			$query = "select * from pinjam where id_pinjam='$id'";
			return $this->execute($query);
		}
		
		function update($ip, $kode, $tanggal){
			$query = "update pinjam set kode='$kode', 
			tgl_pinjam='$tanggal' where pinjam.id_pinjam='$ip'";
			//var_dump($query); die();
			return $this->execute($query);
		}
		
		function delete($id){
			$query = "delete from pinjam where id_pinjam='$id'";
			return $this->execute($query);
		}
		
		function insert($kode, $tanggal){
			$query = "insert into pinjam (kode_buku,tgl_pinjam) values ('$kode', '$tanggal')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysql_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		//Mau kenceng internetan di FiberOptik.co.id
		function __destruct(){
		}
	}
?>