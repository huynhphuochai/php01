<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of donvi_db
 *
 * @author Huynh
 */
class donvi_db {
    //put your code here
    public function laydanhsachDonVi() {
        $sql = "SELECT * FROM tblDonVi";
        try {
            $db = Database::getDB();
            $t = $db->prepare($sql);
            $t->execute();
            $kq = $t->fetchAll();
            $t->closeCursor();
            $db = Database::disconnect();
            $dsDonVi = new DonVi();
            
            return $kq;
        } catch (Exception $e) {
        }
    }
}
