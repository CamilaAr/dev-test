<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    
	
	public static function groupByOwners($files){
	
	$nome = array();
	
	foreach ($files as $index=>$item){
	
	if (isset($nome[$item])) {
		$nome[$item] = array ($nome[$item], $index);
	}
	else{
		
		$array_temp = array($item =>$index);
		
		$nome = $nome + $array_temp;
		
		
		
		
	}
	
	
	
	
}

return $nome;
}
}

$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "maria",

);









var_dump(FileOwners::groupByOwners($files));