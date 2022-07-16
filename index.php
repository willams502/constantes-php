<?php
        // CONSTANTES

        //sempre usar constantes ao invez de utilizar variaveis dentro de funçãoes pois não precisa do comando global como as variaveis.
    define("exemplo", ["fusca","gol","uno"]); /*uma constate não pode receber um valor atribuido depois como uma variavel*/

    /*function teste(){
        echo exemplo;
    }

    teste();
*/
    echo exemplo[1];


?>