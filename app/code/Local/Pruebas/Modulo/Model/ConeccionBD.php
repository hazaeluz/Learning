<?php
/**
 * Created by PhpStorm.
 * User: Saúl
 * Date: 19/04/15
 * Time: 08:12 PM
 */

class Pruebas_Modulo_Model_ConeccionBD extends Mage_Core_Model_Abstract {
    private $team=array('Hazael', 'Gerardo', 'Saul');
    function valores()
    {
        $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
        $sql="Select * from team_learning";
        $result=$connection->query($sql);
        $rfinal=array();
        foreach($result as $row){
            $rfinal[]=$row['nombres'];
        }
        return $rfinal;
    }
}