<?php
class productos_models{
    private $id;
    private $produto;
    private $descripcion;
    private $precio;
    private $cantidad;

    public function __construct($id){

        $this->id = $id;


    }
    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getprecio(){
        return $this->precio;
    }

    public function getcantidad(){
        return $this->cantidad;
    }


    public static function Mostrar(){
        
        $productos[]=["id"=>"1","producto"=>"Call Of Duty MWII","descripcion"=>"Esto es un juego belico","precio"=> 60,"cantidad"=>150];
        $productos[]=["id"=>"2","producto"=>"God Of War","descripcion"=>"Esto es un juego de dioses","precio"=> 50,"cantidad"=>100];
        $productos[]=["id"=>"3","producto"=>"Metro Exodus","descripcion"=>"Esto es un juego post apocaliptico","precio"=> 60,"cantidad"=>20];
        $productos[]=["id"=>"4","producto"=>"Forza Horizon 5","descripcion"=>"Esto es un juego de autos","precio"=> 20,"cantidad"=>250];
        $productos[]=["id"=>"5","producto"=>"Gears 5","descripcion"=>"esto es un juego belico futuro post apocaliptico","precio"=> 40,"cantidad"=>200];
        $productos[]=["id"=>"6","producto"=>"Little Nightmares","descripcion"=>"Esto es un juego de plataformas","precio"=> 20,"cantidad"=>35];
       
        
        return $productos;
        
    }
    public function Buscar(){
        
        $productos[]=["id"=>"1","producto"=>"Call Of Duty MWII","descripcion"=>"Esto es un juego belico","precio"=> 60,"cantidad"=>150];
        $productos[]=["id"=>"2","producto"=>"God Of War","descripcion"=>"Esto es un juego de dioses","precio"=> 50,"cantidad"=>100];
        $productos[]=["id"=>"3","producto"=>"Metro Exodus","descripcion"=>"Esto es un juego post apocaliptico","precio"=> 60,"cantidad"=>20];
        $productos[]=["id"=>"4","producto"=>"Forza Horizon 5","descripcion"=>"Esto es un juego de autos","precio"=> 20,"cantidad"=>250];
        $productos[]=["id"=>"5","producto"=>"Gears 5","descripcion"=>"esto es un juego belico futuro post apocaliptico","precio"=> 40,"cantidad"=>200];
        $productos[]=["id"=>"6","producto"=>"Little Nightmares","descripcion"=>"Esto es un juego de plataformas","precio"=> 20,"cantidad"=>35];
        
        foreach($productos as $t){
            
            if($this->id == $t["id"])
                return $t;
        }
        return [];
    }
}
?>