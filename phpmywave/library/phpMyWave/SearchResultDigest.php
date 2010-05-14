<?php
/**
 * Digest contains the digest information for one 'hit' in the result.
 * 
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_SearchResultDigest
{
    /*
     * @var string
     */
    public $title;
    /*
     * @var string
     */
    public $snippet;
    /*
     * @var string
     */
    public $waveId;
    /*
     * @var array
     */
    public $participants;
    
    /**
     * Constructor
     * 
     * @param string $title
     * @param string $snippet
     * @param string $waveId
     * @param array $participants
     */
    public function __construct($title, $snippet, $waveId, $participants) {
        
    }
 
    
    /**
     * @return string
     */
    public function getTitle ()
    {
        return $this->title;
    }

	/**
     * @return string
     */
    public function getSnippet ()
    {
        return $this->snippet;
    }

	/**
     * @return string
     */
    public function getWaveId ()
    {
        return $this->waveId;
    }

	/**
     * @return array
     */
    public function getParticipants ()
    {
        return $this->participants;
    }

}