<?php
/**
 * SearchResult is returned from a search request.
 * 
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_SearchResult
{
    /**
     * Constructor
     * 
     * @param string $query
     * 
     * @return void
     */
    public function __construct($query) {
        
    }
    
    /**
     * Add a result to the set
     * 
     * @param phpMyWave_SearchResultDigest $digest
     * 
     * @return void
     */
    public function addDigest($digest) {
        
    }
    /**
     * @return phpMyWave_SearchResultDigest
     */
    public function getDigests() {
        
    }
    /**
     * @return int
     */
    public function getNumResults() {
        
    }
    /**
     * @return string
     */
    public function getQuery() {
        
    }
}