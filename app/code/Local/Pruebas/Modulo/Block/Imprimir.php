<?php

class Pruebas_Modulo_Block_Imprimir extends Mage_Core_Block_Template
{
    function obtenerValores()
    {
        $team = Mage::getModel('lesson/coneccionbd');
        return $team->valores();
    }
} 