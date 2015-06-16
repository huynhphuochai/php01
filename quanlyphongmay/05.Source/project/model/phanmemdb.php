
<?php 
include('../includes/database.php');
include('../entity/phanmem.php');
	
	class PhanMem_DB{
		public function get_PhanMem(){
			$db = Database::getDB();
			
			$query = 'select *from phanmem';
			try{
				$t = $db->prepare($query);
				$t->execute();
				$result = $t->fetchAll();
				$t->closeCursor();
				$PhanMem = array();
				foreach($result as $row){
						$phanmem = new PhanMem(
										$row['ID'], 
										$row['LoaiPhanMem'], 
										$row['TenPhanMem'], 
										$row['ChucNang'],
										$row['PhienBan'],
										$row['GhiChu']);
				$PhanMem[] = $phanmem;
						 
				}
				return $PhanMem;
			}
			catch (PDOException $e){
				return $e->getMessage();	
			}
		}
		
		//lay ds theo loai phan mem
		public function get_by_LoaiPhanMem($LoaiPM)
		{
				$db = Database::getDB();
				$query = "select *from phanmem where LoaiPhanMem ='$LoaiPhanMem' ";
			try{
				$t = $db->prepare($query);
				$t->execute();
				$row = $t->fetch();
				$t->closeCursor();
				$phanmem = new PhanMem(
										$row['ID'], 
										$row['LoaiPhanMem'], 
										$row['TenPhanMem'], 
										$row['ChucNang'],
										$row['PhienBan'],
										$row['GhiChu']);				
				return $phanmem;
			}
			catch (PDOException $e){
				return $e->getMessage();	
			}
		}
		
		//Them PM moi
		
		public static function add_PhanMem($PhanMem)
		{
			$db = Database::getDB();
			$LoaiPhanMem = $PhanMem->getLoaiPhanMem();
			$TenPhanMem = $PhanMem->getTenPhanMem();
			$ChucNang = $PhanMem->getChucNang();
			$PhienBan = $PhanMem->getPhienBan();
			$GhiChu = $PhanMem->getGhiChu();
			
			$query = 'insert into phanmem (LoaiPhanMem,TenPhanMem,ChucNang,PhienBan,GhiChu) values($LoaiPhanMem,$TenPhanMem
			,$ChucNang,$PhienBan,$GhiChu)';
			
			try{
				$t = $db->prepare($query);
				$t->execute();
				$result = $db->lastInsertId();
				return $result;
			}
			catch(PDOException $e){
				return $e->getMessage();	
			}
		}
	}
?>