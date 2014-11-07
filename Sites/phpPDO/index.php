<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author gilsonanselmodearaujo
 */

try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo", "root", "1234");
    
    /*
     * 
    $query = "insert into clientes(nome, email) values('Pedro', 'pedro@idnadevendas.com.br')";
    
    $resultado = $conexao->exec($query);
    
    print_r($resultado);
     
    
     */
    
    $query = "select * from clientes";
    
    $stmt = $conexao->query($query);
    
    $resultado = $stmt->fetchAll(PDO::FETCH_CLASS);
    //print_r($resultado);
    
    foreach ($resultado as $cliente){
        echo $cliente->nome."<BR />";
    }
    
}  
catch (\PDOException $e){
    echo "Erro ao conectar com banco ".$e->getMessage();
    
}

