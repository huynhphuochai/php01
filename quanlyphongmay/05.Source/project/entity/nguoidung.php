<?php
class NguoiDung
{
	private $MaNguoiDay;
	private $MaDonVi;
	private $Ten;
	private $HoVaTen;
	private $Email;
	private $DienThoai;
	private $TenDangNhap;
	private $MatKhau;
	private $QuyenHan;
	private $BatTat;
	
	public function __construct($MaNguoiDay, $MaDonVi, $Ten, $HoVaTen, $Email, $DienThoai, $TenDangNhap, $MatKhau, $QuyenHan, $BatTat)
	{
		$this->manguoiday = $MaNguoiDay;
		$this->madonvi = $MaDonVi;
		$this->ten = $Ten;
		$this->hovaten = $HoVaTen;
		$this->email = $Email;
		$this->dienthoai = $DienThoai;
		$this->tendangnhap = $TenDangNhap;
		$this->matkhau = $MatKhau;
		$this->quyenhan = $QuyenHan;
		$this->battat = $BatTat;
	}
	
	public function getMaNguoiDay() {
		return $this->manguoiday;
	}
	
	public function setMaNguoiDay($value) {
		$this->manguoiday = $value;
	
	}
	public function getMaDonVi() {
		return $this->madonvi;
	}
	
	public function setMaDonVi($value) {
		$this->madonvi = $value;
	
	}
	public function getTen() {
		return $this->ten;
	}
	
	public function setTen($value) {
		$this->ten = $value;
	
	}
	public function getHoVaTen() {
		return $this->hovaten;
	}
	
	public function setHoVaTen($value) {
		$this->hovaten = $value;
	
	}
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($value) {
		$this->email = $value;
	}

	public function getDienThoai() {
		return $this->dienthoai;
	}
	
	public function setDienThoai($value) {
		$this->dienthoai = $value;
	}
	public function getTenDangNhap() {
		return $this->tendangnhap;
	}
	
	public function setTenDangNhap($value) {
		$this->tendangnhap = $value;
	}
	public function getMatKhau() {
		return $this->matkhau;
	}
	
	public function setMatKhau($value) {
		$this->matkhau = $value;
	}
	
	public function getQuyenHan() {
		return $this->quyenhan;
	}
	
	public function setQuyenHan($value) {
		$this->quyenhan = $value;
	}
	
	public function getBatTat() {
		return $this->battat;
	}
	
	public function setBatTat($value) {
		$this->battat = $value;
	}
}
?>