<?php
	$output = substr('Hello',0,3);
	echo $output."<br>";
	$output = substr('Hello',1,3);
	echo $output."<br>";
	$output = substr('Hello',-2);
	echo $output."<br>";

	$output = strlen('Hello World');
	echo $output."<br>";

	$output = strpos('Hello World','o');
	echo $output."<br>";
	
	$output = strrpos('Hello World','o');
	echo $output."<br>";

	$text = 'Hello World';
	var_dump($text);

	echo "<br>";

	$output = strtolower('Hello World');
	echo $output."<br>";


	$output = strtoupper('Hello World');
	echo $output."<br>";

	$output = ucwords('isto eh um teste sobre php');
	echo $output."<br>";

	$text = 'Hello World';
	$output = str_replace('World','Teste',$text);
	echo $output."<br>";


	$val = '22';
	$output = is_string($val);
	echo $output."<br>";

	$values = array(true,false,null,'abc',33,'90',22.4,'54.4','',' ',0,'0.5');
	foreach($values as $value){
		if(is_string($value)){
			echo "{$value} eh string <br>";
		}
	}	

	$texto = "A mula sem cabeça é uma lenda do folclore brasileiro. A sua origem é desconhecida, mas bastante evidenciada em todo o Brasil.

A mula é literalmente uma mula sem cabeça, que solta fogo pelo pescoço, local onde deveria estar sua cabeça. Possui em seus cascos, ferraduras que são de prata ou de aço e apresentam coloração marrom ou preta.

Segundo alguns pesquisadores, apesar de ter origem desconhecida, a lenda fez parte da cultura da população que vivia sob o domínio da Igreja Católica.

Segundo a lenda, qualquer mulher que namorasse um padre seria transformada em um monstro. Dessa forma, as mulheres deveriam ver os padres como uma espécie de “santo” e não como homem, se cometessem qualquer pecado com o pensamento em um padre, acabariam se transformando em mula sem cabeça.";

	$comprimida = gzcompress($texto);
	echo $comprimida."<br><br>";

	echo $texto."<br><br>";
	

?>
