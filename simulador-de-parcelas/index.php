<?php

/* 
 Plugin name: Plugin para simular parcelas dos preços
 Description: Parcelamento de preços plugin personalizado
 Version: 1.0
 Author: jonathan ramirez
 Text Domain: Simulador de parcelas

 */

//Js

//Css

//Includes

require_once("includes/active.php");


//shortcod
require_once("includes/shortcodes/atalhos.php");

add_shortcode('jrs_simulador_parcela','functionSimuladorparc');
