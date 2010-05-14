<?php
/**
 * Tag-Class
 * 
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_Tags
{

    /**
     * Constructor 
     * 
     * @param array $tags
     * @param phpMyWave_Wavelet $wavelet
     * @param phpMyWave_OperationQueue $operationQueue
     * 
     * @return void
     */
    public function __construct($tags, $wavelet, $operationQueue) {
        
    }
    /**
     * Add Tag if it does not exist
     * 
     * @param string $tag Tag
     * 
     * @return boolean
     */
    public function add($tag) {
        
    }
    
    /**
     * Checks whether the owning wavelet has the given tag or not.
     * 
     * @param string $tag Tag
     * 
     * @return boolean
     */
    public function contains($tag) {
        
    }
    
    /**
     * Checks whether the owning wavelet has any tag or not.
     * 
     * @return boolean
     */
    public function isEmpty() {
        
    }
    
    /**
     * Removes the given tag id if it exists.
     * 
     * @return boolean
     */
    public function remove() {
        
    }
    /**
     * Returns the number of tags in the owning wavelet.
     * 
     * @return int
     */
    public function size() {
        
    }
}