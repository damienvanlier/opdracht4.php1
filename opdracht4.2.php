<?php

//$uur = date("H")
$uur = 9;

switch($uur)
{
    case $uur > 6 && $uur <12 :
    echo "Het is ochtend" ; break;
}

/*
{
    case VOORWAARDE MIDDAG :
    "echo Het is middag" ; break;
}
*/