<?php
	class DonVi{
		private $MaDonVi;
		private $TenDonVi;
		private $BatTat;
		
		public function _construct($MaDonVi,$TenDonVi,$BatTat)
		{
			$this->MaDonVi=$MaDonVi;
			$this->TenDonVi=$TenDonVi;
			$this->BatTat=$BatTat;
		}
		
		public function getMaDonVi()
		{
			return $this->MaDonVi;
		}
		public function setMaDonVi($value)
		{
			$this->MaDonVi=$value;
		}
		
		public function getTenDonVi()
		{
			return $this->TenDonVi;
		}
		public function setTenDonVi($value)
		{
			$this->TenDonVi=$value;
		}
		
		public function getBatTat()
		{
			return $this->BatTat;
		}
		public function setBatTat($value)
		{
			$this->BatTat=$value;
		}
	}
?>