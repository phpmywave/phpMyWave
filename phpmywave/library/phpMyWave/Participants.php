<?php
/**
 * A class that represents wavelet's participants. This class supports various participant related operations, such as, adding participant to a wavelet.
 * 
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_Participants
{
    const ROLE_FULL      = 1;
    const ROLE_READ_ONLY = 2;
    const ROLE_UNKNOWN   = 99;
    
    /**
     * Constructor
     * 
     * @param array $participants
     * @param array $roles
     * @param phpMyWave_Wavelet $wavelet
     * @param phpMyWave_OperationQueue $operationQueue
     */
    public function __construct($participants, $roles, $wavelet, $operationQueue) {
        
    }
    /**
     * Add the given participant id if it doesn't exist.
     * 
     * @param string $participantId
     * 
     * @return boolean
     */
    public function add($participantId) {
        
    }
    /**
     * 
     * @param array $collection
     * 
     * @return boolean
     */
    public function addAll($collection) {
        
    }
    /**
     * @return void
     */
    public function clear() {
        
    }
    /**
     * Checks whether the given participant id exists in the set or not.
     * 
     * @param string $participantId
     * 
     * @return boolean
     */
    public function contains($participantId) {
        
    }
    /**
     * 
     * @param array $collection
     * 
     * @return boolean
     */
    public function containsAll($collection) {
        
    }
    /**
     * 
     * @param string $participantId
     * 
     * @return int
     */
    public function getParticipantRole($participantId) {
        
    }
    
    /**
     * @return boolean
     */
    public function isEmpty() {
        
    }
    
    /**
     * 
     * @param object $object
     * 
     * @return boolean
     */
    public function remove($object) {
        
    }
    /**
     * 
     * @param array $collection
     * 
     * @return boolean
     */
    public function removeAll($collection) {
        
    }
    /**
     * 
     * @param array $collection
     * 
     * @return boolean
     */
    public function retainAll($collection) {
        
    }
    
    /**
     * 
     * @param string $participant
     * @param int $role
     * 
     * @return void
     */
    public function setParticipantRole($participant, $role) {
        
    }
    
    /**
     * Number of participants in this wavelet
     * 
     * @return int
     */
    public function size() {
        
    }
    /**
     * @return array
     */
    public function toArray() {
        
    }
}