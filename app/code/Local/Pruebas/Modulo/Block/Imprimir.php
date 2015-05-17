<?php
/**
 * Created by PhpStorm.
 * User: Saúl
 * Date: 19/04/15
 * Time: 08:27 PM
 */
//Pruebas_Modulo = lesson/imprimir
class Pruebas_Modulo_Block_Imprimir extends Mage_Core_Block_Template {
    function obtenerValores(){
        $team = Mage::getModel('lesson/coneccionbd');
        return $team->valores();
    }
} 