<?php
include('includes/database.php');
include('entity/donvi.php');
	
	class DonVi_DB
	{
		//lay danh sach don vi
		public function getDSDonVi()
		{
			$db = Database::getDB();
			$query = 'select * from tbl_donvi';
			try
			{
				$t = $db->prepare($query);
				$t->execute($query);
				$result = $t->fetchAll();
				$t->closeCursor();
				$DonVi = array();
				foreach($result as $row)
				{
					$donvi = new DonVi($row['MaDonVi'], $row['TenDonVi'], $row['BatTat']);
					$DonVi[] = $donvi;					
				}
				return $donvi;				
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include ('../errors/error.php');
				exit();
			}
		}
		//add
		public static function addDonVi($DonVi)
		{
			$db = Database::getDB();
			$TenDonVi = $DonVi->getTenDonVi;
			$BatTat = $DonVi->getBatTat;
			$query = "insert into tlb_donvi(TenDonVi,BatTat) values (:ten, :battat)";
			try
			{
				$t = $db->prepare($query);
				$t->bindValue(':ten', $TenDonVi);
				$t->bindValue(':battat', $BatTat);
				$t->execute();
				$t->closeCursor();
				$result = $db->lastInsertId();
				return $result;
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include('../errors/error.php');
				exit();
			}
		}
		
		//delete
		public static function deleteDonVi($madonvi)
		{
			$db = Database::getDB();
			$query = "delete *from tbl_donvi where MaDonVi = ':ma'";
			try
			{
				$t = $db->prepare($query);
				$t->bindValue(':ma',$madonvi);
				$row_count=$t->execute();
				$t->closeCursor();
				return $result;
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
				include ('../errors/error.php');
				exit();
			}
		}
		//update
		public static function updateDonVi($madonvi, $tendonvi, $battat)
		{
			$db=Database::getDB();
			$query = "update tbl_donvi set TenDonVi = ':tendonvi', BatTat = ':battat' 
																	where MaDonVi = ':ma'";
			try
			{
				$t = $db->prepare($query);
				$t->bindValue(':ma', $madonvi);
				$t->bindValue(':tendonvi', $tendonvi);
				$t->bindValue(':battat', $battat);
				$row_count = $t->execute();
				$t->closeCursor();
				return $row_count;
			}
			catch(PDOException $e)
			{
				$error_message= $e->getMessage();
				include('../errors/error.php');
				exit();
			}
		}	
	}



?>