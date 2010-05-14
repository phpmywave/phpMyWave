<?php
/**
 * A class that represents an operation parameter. Useful for constructing the operation.
 *  
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_OperationRequestParameter
{
    /**
     * @var phpMyWave_Enum_JsonRpcConstantParamsProperty
     */
    private $_key;
    /**
     * @var object
     */
    private $_value;
    
    private function __construct() {
        
    }
    /**
     * Factory
     * @param phpMyWave_Enum_JsonRpcConstantParamsProperty $key
     * @param object $value
     */
    public function of($key, $value) {
        
    }
	/**
     * @return phpMyWave_Enum_JsonRpcConstantParamsProperty
     */
    public function getKey ()
    {
        return $this->_key;
    }

	/**
     * @return object
     */
    public function getValue ()
    {
        return $this->_value;
    }

    
    
}