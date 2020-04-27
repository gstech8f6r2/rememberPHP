<?php
// commento

/* commentoo su piu riga */

# riepilogo dei commenti finito :)


// facciamo qualcosa...

//variabile concatenata (ricorda punto)

$nome= "Giovannino";

echo "Il mio nome è: " .  $nome;


//funzione semplice echo   (dichiariamo cosa fa e poi la richiamiamo)

// trucco per stampare html per andare a capo
echo "</br>";


function get_name($nome){
  echo "Dalla funzione stampa il mio nome grazie --> " . $nome;
}

get_name($nome);


// proviamo la funzione che  ci restituisce una somma

function somma($a,$b){
   $sum= $a + $b;
  return $sum;
}


// complichiamo un po le cose (rendiamo sempre il valore non negativo)

$somma =somma(82,18);
echo "</br>............" . $somma;

function sottrazione_positiva($x,$y){
  if($x >= $y){
    $diff=$x-$y;
    return $diff;
  }else{
    $diff=$y-$x;
    return $diff;
  }

}

$esito_sottrazione= sottrazione_positiva(10,52);
echo "</br>............" . $esito_sottrazione;


//-----------------------------------------------------


// oh mio dio... e se devo trovare ipotenusa di un triangolo rettangolo???
// cateto1, cateto2,ipotenusa
// sqrt è una funzione della libreria math per radice quadrata
function areaTriangolo_da_cateti($c1,$c2){
  $ipotenusa= sqrt($c1 * $c1 + $c2 * $c2);
  return $ipotenusa;
}
$ipot= areaTriangolo_da_cateti(3,2);
echo "ipotenusa è: " . $ipot;


//................ con questi dati si potrebbe comporre un form volendo

 ?>
