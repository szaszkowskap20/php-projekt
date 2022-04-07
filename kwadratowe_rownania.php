<?php



function w_kanoniczna()
{
}

function w_iloczynowa()
{
}

function formatowanie(){

}

function kwadratowa_w_a_b_c($funkcja)
{
    $dane = [];
    $kk = 0;
    $a = ;
    $b = ;
    while($i < strlen($funkcja)) {
        if ($funkcja[$i] == "x") {
            if($funkcja[$i + 1] == "2"){
                if ($i == 0) {
                    $a = 1;
                } 
                if(($i - 1) == "-"){
                    $a = -1;
                }
                if(($i-1) == "+"){
                    $a = 1;
                }
                else {
                    for ($j = 0; $j < $i; $j++) {
                        $a += $funkcja[$j];
                    }
                    $a = (int) $a;
                }
                array_push($dane, $a);
                $k = $i;
            }
            else{
                if(($i - 1) == "-"){
                    $b = -1;
                }
                if(($i-1) == "+"){
                    $b = 1;
                }
                for($j = $i; $j > $k; $j--){
                    $b += $funkcja[$j];
                   
                }
                $b = (int) $b;
                array_push($dane, $b);
                for($j = $i; $j < strlen($funkcja); $j++){
                    $c += $funckja[$j];
                    
                }
                $c = (int) $c;
                array_push($dane, $c);
            }
         
        }

        
    }
}

function delta()
{
    $dane = [];
    $a = $dane[0];
    $b = $dane[1];
    $c = $dane[2];
    $x = $dane[3];
    $delta = $b * $b - (4 * $a * $c);
    if ($delta == 0) {
        echo "Równianie ma jedno rozwiązanie";
        return "jeden";
    }
    if ($delta < 0) {
        echo "Równanie nie posiada pierwiastków";
        return "zero";
    } else {
        echo "Rownanie ma dwa pierwiastki";
        return "dwa";
    }
}

function kwadratowe2()
{
    $dane = []; //kwadratowa_w_a_b_c();
    $a = $dane[0];
    $b = $dane[1];
    $c = $dane[2];
    //$x = $dane[3];
    $delta = $dane[4];
    $x1 = (-$b + sqrt($delta)) / 2 * $a;
    $x2 = (-$b - sqrt($delta)) / 2 * $a;

    $wynik = array($x1, $x2);
    return $wynik;
}
function kwadratowe1()
{
    $dane = []; //kwadratowa_w_a_b_c();
    $a = $dane[0];
    $b = $dane[1];
    $c = $dane[2];
    //$x = $dane[3];
    $x0 = (-$b) / (2 * $a);
    return $x0;
}


$og = $_POST['rownanie_o'];


if (empty($og)) {
    header("asdf");
} else {
    w_kanoniczna();
    w_iloczynowa();
}
