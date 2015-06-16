<?php
/**
//class loai phan mem
*/
 	
class LoaiPhanMem
{
	private $ID;
    private $TenLoai;
    private $GhiChu;
    
	function __construct($ID,$TenLoai,$GhiChu)
	{
		 $this->ID = $ID;
        $this->TenLoai = $TenLoai;
        $this->GhiChu=$GhiChu;
	}

	public function getID(){
		return $this->ID;
	}

	public function getTenLoai(){
		return $this->TenLoai;
	}

	public function setTenLoai($value){
		$this->TenLoai=$value;
	}

	public function getGhiChu(){
		return $this->GhiChu;
	}

	public function setGhiChu($value){
		$this->GhiChu=$value;
	}
}
?>