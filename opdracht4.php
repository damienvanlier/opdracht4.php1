<?php

$uur = date("H")
//$uur = 9;
echo "Het is $uur uur > ";

if($uur > 6 & $uur <12)
{
    echo "Het is ochtend";
}
elseif($uur > 11 & $uur <18)
{
    echo "Het is middag";
}
elseif($uur > 17 & $uur <24)
{
    echo "Het is avond";
}
elseif($uur > 23 & $uur <6)
{
    echo "Het is nacht";
}

?>