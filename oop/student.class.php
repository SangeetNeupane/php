<?php

class student{
    private $SID;
    private $FULLNAME;
    private $EMAIL;
    private $PHONE;

    public function __construct(){
        //null
    }
    public function getSID(){
        return $this ->$SID;
    }
    public function getFULLNAME(){
        return $this ->$FULLNAME;
    }
    public function getEMAIL(){
        return $this ->$EMAIL;
    }
    public function getPHONE(){
        return $this ->$PHONE;
    }
}


?>