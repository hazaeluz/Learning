<?php

class Pruebas_Modulo_Model_ConeccionBD extends Mage_Core_Model_Abstract
{
    function valores()
    {
        $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
        $sql = "SELECT * FROM team_learning";
        $result = $connection->query($sql);
        $rfinal = array();
        foreach ($result as $row) {
            $rfinal[] = $row['nombres'];
        }
        return $rfinal;
    }
}