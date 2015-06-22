<?php
/*
Các hàm
Lấy danh sách Loại PM
Thêm Loại PM
Xóa Loại PM
Sửa Loại PM
*/
	/**
	* 
	*/
	class LoaiphanmemDB
	{
		////////////////////////////////////////////////////////
		public static function get_loaiphanmem()
		{
			$db = Database::getDB();
	        $query = 'SELECT * FROM tbl_loaiphanmem'
	        try
			{
				$t = $db->prepare($query);
				$t->execute();
				$result = $t->fetchAll();
				$t->closeCursor();
				
				$tbl_loaiphanmem = array();
				foreach ($result as $row) 
				{
					$loaiphanmem = new Loaiphanmem(	$row['ID'], 
											$row['TenLoai'], 
											$row['GhiChu']);
					$tbl_loaiphanmem[] = $loaiphanmem;
				}
				return $tbl_loaiphanmem;
			}
			catch(PDOException $e)
			{
				$error_message = $e->getMessage();
	            //include('../errors/database_error.php');
	            exit();
			}
		}
	}
	////////////////////////////////////////////////////////
	public static function get_loaiphanmem($loaiphanmem_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM tbl_loaiphanmem
                  WHERE ID = :id";
		try
		{
			$t = $db->prepare($query);
			$t->bindValue(':id', $loaiphanmem_id);
			$t->execute();
			$result = $t->fetch();
			$t->closeCursor();
			
        	$loaiphanmem = new Loaiphanmem(		$result['ID'], 
										$result['TenLoai'], 
										$result['GhiChu']);
        return $loaiphanmem;
		}
		catch(PDOException $e)
		{
			$error_message = $e->getMessage();
           //include('../errors/database_error.php');
            exit();
		}
    
       
    }
    ////////////////////////////////////////////////////////
    public static function xoa_loaiphanmem($loaiphanmem_id) {
        $db = Database::getDB();
        $query = "DELETE FROM tbl_loaiphanmem
                  WHERE ID = :id";
		try
		{
			$t = $db->prepare($query);
			$t->bindValue(':id', $loaiphanmem_id);
			$row_count  = $t->execute();
			$t->closeCursor();
			return $row_count;
		}
		catch(PDOException $e)
		{
			$error_message = $e->getMessage();
            //include('../errors/database_error.php');
            exit();
		}
    }
    ////////////////////////////////////////////////////////
    public static function them_loaiphanmem($loaiphanmem) {
        $db = Database::getDB();
        $id = $loaiphanmem->getID();
        $tenloai = $loaiphanmem->getTenLoai();
        $ghichu = $loaiphanmem->getGhiChu();

        $query =
            "INSERT INTO tbl_loaiphanmem
                 (ID, TenLoai, GhiChu)
             VALUES
                 (:id, :tenloai, :ghichu)";

        try
		{
			$t = $db->prepare($query);
			$t->bindValue(':id', $id);
			$t->bindValue(':tenloai', $tenloai);
			$t->bindValue(':ghichu', $ghichu);
			$t->execute();
			$t->closeCursor();
			$id = $db->lastInsertId();
			return $id;
		}
		catch(PDOException $e)
		{
			$error_message = $e->getMessage();
            //include('../errors/database_error.php');
            exit();
		}
    }
	
	////////////////////////////////////////////////////////
	public static function update_loaiphanmem($id, $tenloai, $ghichu) {
		$db = Database::getDB();
		$query = "UPDATE tbl_loaiphanmem
				  SET
					 ID = :id, 
					 TenLoai = :tenloai, 
					 GhiChu = :ghichu, 
				  WHERE 
				  	ID = :id";
		try
		{
			$t = $db->prepare($query);
			$t->bindValue(':id', $id);
			$t->bindValue(':tenloai', $tenloai);
			$t->bindValue(':ghichu', $ghichu);
			$row_count = $t->execute();
			$t->closeCursor();
			return $row_count;
		}
		catch(PDOException $e)
		{
			$error_message = $e->getMessage();
            //include('../errors/database_error.php');
            exit();
		}
	}
}
?>	
		