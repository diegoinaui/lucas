<?php
function arbolito($niveles) {
    // Calculo la cantidad max de caracteres que tiene
    // el arbol en la base (astericos y espacios)
    // en función de los nivels que quiera dibujar
    $maxChars =  1 + ($niveles - 1) * 4;

    for ($i = 0; $i < $niveles; $i++) {
        // Calculo la posición del asterisco del centro
        $tronco = ($maxChars - 1) / 2;

        // Calculo posicion de asteriscos a la izquierda del tronco
        $izquierda = $tronco - ($i * 2);

        // Calculo posicion de asteriscos a la derecha del tronco
        $derecha  = $tronco + ($i * 2);

        // Dibujola cantidad linea
        for ($j = 0; $j < $maxChars; $j++) {
            // Si es una posición par solo puede
            // ser un asterisco o espacio
            if ($j % 2 == 0) {
                // Si esta dentro del rango izquierda - derecha
                //dibujo un asterisco
                if ($j >= $izquierda && $j <= $derecha) {
                    echo "*";
                } else {// Si esta fuera del rango  un espacio
                    echo " ";
                }
            } else {  // Este es el else de que sea una posición par (o sea impar), tiene que ser un espacio siempre
                echo " ";
            }
        }
        echo "\n";
    }
}

arbolito(3);
?>