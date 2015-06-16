<?php
	class PhanMem{
		private $ID;
		private $LoaiPhanMem;
		private $TenPhanMem;
		private $ChucNang;
		private $PhienBan;
		private $GhiChu;
		
		public function __construct($ID,$LoaiPhanMem,$TenPhanMem,$ChucNang,$PhienBan,$GhiChu){
			$this->ID = $ID;
			$this->LoaiPhanMem = $LoaiPhanMem;
			$this->TenPhanMem = $TenPhanMem;
			$this->ChucNang = $ChucNang;
			$this->PhienBan = $PhienBan;
			$this->GhiChu = $GhiChu; 	
		}
		
		public function getID(){
			return $this->ID;	
		}
		
		public function setID($value){
			$this->ID = $value;	
		}
		
		public function getLoaiPhanMem(){
			return $this->LoaiPhanMem;	
		}
		
		public function SetLoaiPhanMem($value){
			$this->LoaiPhanMem = $value;	
		}
		
		public function getTenPhanMem(){
			return $this->TenPhanMem;	
		}
		
		public function setTenPhanMem($value){
			$this->TenPhanMem = $value ;	
		}
		
		public function getChucNang(){
			return $this->ChucNang;	
		}
		
		public function setChucNang($value){
			 $this->ChucNang = $value;	
		}
		
		public function getPhienBan(){
			return $this->PhienBan;	
		}
		
		public function setPhienBan($value){
			$this->PhienBan = $value;	
		}
		
		public function getGhiChu(){
			return $this->GhiChu;	
		}
		
		public function setGhiChu($value){
			$this->GhiChu = $value;	
		}
	}
?>