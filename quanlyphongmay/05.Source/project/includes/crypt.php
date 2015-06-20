<?php

class Crypt {

    private $key;
    private $ivs;
    private $iv;
    private $cipher;
    private $mode;

    //Hàm khởi tạo
    public function __construct() {
        $this->cipher = MCRYPT_RIJNDAEL_128;
        $this->mode = MCRYPT_MODE_CFB;
        $this->key = sha1('secreyKey', TRUE);
        $this->iv = mcrypt_get_iv_size($this->cipher, $this->mode);
        $this->ivs = mcrypt_create_iv($this->iv);
    }

    public function Encrypt($data) {
        $data = mcrypt_encrypt($this->cipher, $this->key, $this->data, $this->mode, $this->iv);
        $data = base64_encode($data);
        return $data;
    }

    public function Decrypt($data) {
        $data = base64_decode($data);
        $data = mcrypt_decrypt($this->cipher, $this->key, $this->data, $this->mode, $this->iv);
        return $data;
    }

}

?>