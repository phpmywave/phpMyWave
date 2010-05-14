<?php
/**
 * A class that represents a property filter for element, that can be used when when searching for an element inside a blip.
 * 
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_Restriction
{
    /**
     * @var string
     */
    private $_key;
    /**
     * @var string
     */
    private $_value;
    
    /**
     * Constructor
     */
    private __construct() {
        
    }
    
    /**
     * Creates an instance of phpMyWave_Restriction for a property with the given key and value.
     * 
     * @param string $key
     * @param string $value
     * @return phpMyWave_Restriction
     */
    public static function of($key, $value) {
        $restriction = new phpMyWave_Restriction();
        
        return $restriction;
    }
    
    /**
     * @return string
     */
    public function getKey() {
        
    }
    /**
     * @return string
     */
    public function getValue() {
        
    }
}