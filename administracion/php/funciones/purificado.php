<?php

/*
  de esta forma se evitan posibles sql injection... 
  se debe purificar siempre un dato antes de usarlo
*/


//purifica los elementos de un array
function PurificarArray($array){
	return array_map('htmlspecialchars',$array);      //ejecuto la funcion htmlspecialshars sobre cada elemento del array
}

//purifica los values de un hash
function PurificarHash($hash){
	$values = PurificarArray(array_values($hash));    //obtengo y purifico los values del hash
	$keys = array_keys($hash);                        //obtengo los keys del hash
	return array_combine($keys, $values);             //vuelvo a combinar todo para devolver el hash como estaba, pero purificado
}

?>