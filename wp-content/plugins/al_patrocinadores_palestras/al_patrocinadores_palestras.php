<?php
/*
* Patrocinadores Alura
* Plugin Name:              Patrocinadores Alura
* Description:              Selecionarpatrocinadores da palestra da Alura
* Version:                  2.0.0
* Author:                   Anthony Kildery
*/

if( !defined( 'ABSPATH' )):
    die;  //Para a inicilização do plugin
endif;

//Acessando arquivos do widget
require_once plugin_dir_path( __FILE__ ) . '/includes/al_patrocinadores_palestras_widget.php';
