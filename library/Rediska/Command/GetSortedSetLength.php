<?php

/**
 * Get length of Sorted Set
 * 
 * @param string $name Key name
 * @return integer
 * 
 * @author Ivan Shumkov
 * @package Rediska
 * @version @package_version@
 * @link http://rediska.geometria-lab.net
 * @licence http://www.opensource.org/licenses/bsd-license.php
 */
class Rediska_Command_GetSortedSetLength extends Rediska_Command_Abstract
{
    protected $_version = '1.1';
    
    public function create($name)
    {
        $connection = $this->_rediska->getConnectionByKeyName($name);

        $command = array('ZCARD', "{$this->_rediska->getOption('namespace')}$name");

        return new Rediska_Connection_Exec($connection, $command);
    }
}