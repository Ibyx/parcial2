<?php
class usuario{
    private $usuario;
    private $password;
    public function __construct($usuario,$password,$salt){

        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;

    }

    public function validar_usuario(){
        
        $tabla[]=["usuario"=>"admin","password"=>"0e74df3113fdd5a5ee8b472d9070cb063486466b","salt"=>"yM9FMy6sr9"];
        
        foreach($tabla as $t){
            $pass = sha1($this->password.$t["salt"]);
            if($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
        }
        return [];
        
    }
}
?>