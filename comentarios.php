<?php

class comentario
{
    public static function selecionatodos()
    {
        $con = conection::getconn();
        
        $sql = "SELECT * FROM comentaio ORDER BY id DESC";
        $sql = $con->prepare($sql);
        $sql->execute();

        $resultado = array();

        while($row = $sql->fetchobject('comentario')){
            $resultado[] = $row;
        }

        if(!$resultado){
            throw new Exception("não foram encontrados regsitros");
        }

        return $resultado;

        

    }

    
}

selecionatodos();

var_dump($resultado);
