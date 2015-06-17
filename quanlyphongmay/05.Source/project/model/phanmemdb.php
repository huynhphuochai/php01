
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
		
		//xoa PM
		
		public static function delete_PhanMem($LoaiPhanMem){
			$db = Database::getDB();
			$query = "delete * from phanmem where LoaiPhanMem = 'loai'";
			
			try{
				$t = $db->prepare($query);
				$t->bindValue(':loai',$LoaiPhanMem);
				$row_couut = $t->execute();
				$t->closeCursor();
				return $row_couut;
			}
			catch(PDOException $e){
					return $e->getMessage();	
			}
		}
		
		//sua PM
		
		public static function update_PhanMem($ID,$LoaiPhanMem,$TenPhanMem,$ChucNang,$PhienBan,$GhiChu){
			$db = Database::getDB();
			$query = "update phanmem SET 
							LoaiPhanMem = ':loaiphanmem',
							TenPhanMem = ':tenphanmem',
							ChucNang = ':chucnang',
							PhienBan = ':phienban',
							GhiChu = ':ghichu'
					where
							ID = ':id'
							";	
			try{
				$t = $db->prepare($query);
				$t->bindValue('id',$ID);
				$t->bindValue('tenphanmem',$TenPhanMem);
				$t->bindValue('chucnang',$ChucNang);
				$t->bindValue('phienban',$PhienBan);
				$t->bindValue('ghichu',$GhiChu);
				$t->bindValue('loaiphanmem',$LoaiPhanMem);
				
				$row_count = $t->execute();
				$t->closeCursor();
				
				return $row_count;
			}
			catch(PDOException $e){
				return $e->getMessage();	
			}
		}
	}
?>