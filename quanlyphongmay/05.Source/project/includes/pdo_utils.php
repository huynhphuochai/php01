<?php

class db extends PDO {

    public function fetch_all($query, $parameters = array()) {
        $read_stmt = $this->prepare_and_execute($query, $parameters);
        $fetched_rows = $read_stmt->fetchAll(\PDO::FETCH_CLASS);
        $read_stmt->closeCursor();
        unset($read_stmt);
        return $fetched_rows;
    }

    public function fetch_one($query, $parameters = array()) {
        $read_stmt = $this->prepare_and_execute($query, $parameters);
        $fetched_row = $read_stmt->fetchObject();
        if (!is_object($fetched_row)) {
            $fetched_row = false;
        }
        $read_stmt->closeCursor();
        unset($read_stmt);
        return $fetched_row;
    }

    public function fetch_column($query, $parameters = array(), $column = 0) {
        $column = abs((int) $column);
        $read_stmt = $this->prepare_and_execute($query, $parameters);
        $fetched_column = $read_stmt->fetchColumn($column);
        $read_stmt->closeCursor();
        unset($read_stmt);
        return $fetched_column;
    }

    public function fetch_scalar($query, $parameters = array()) {
        return $this->fetch_column($query, $parameters, 0);
    }

    public function modify($query, $parameters) {
        $modify_stmt = $this->prepare_and_execute($query, $parameters);
        return $modify_stmt->rowCount();
    }

    public function prepare_and_execute($query, $parameters = array()) {
        $prep_stmt = $this->prepare($query);
        $prep_stmt->execute($parameters);
        return $prep_stmt;
    }

}
