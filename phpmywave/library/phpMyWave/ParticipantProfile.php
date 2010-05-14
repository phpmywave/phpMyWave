<?php
/**
 * ParticipantProfile represents participant information.
 * 
 * It contains display name, avatar's URL, and an external URL to view the participant's profile page.
 * This is a data transfer object that is being sent from Robot when Rusty queries a profile.
 * A participant can be the Robot itself, or a user in the Robot's domain.
 * 
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_ParticipantProfile
{
    /**
     * @var string
     */
    private $_name;
    /**
     * @var string
     */
    private $_imageUrl;
    /**
     * @var string
     */
    private $_profileUrl;
    /**
     * Constructor
     * 
     * @param string $name
     * @param string $imageUrl
     * @param string $profileUrl
     * 
     * @return void
     */
    public function __construct($name = false, $imageUrl = false, $profileUrl = false) {
        
    }
    /**
     * @return string 
     */
    public function getName ()
    {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function getImageUrl ()
    {
        return $this->_imageUrl;
    }

    /**
     * @return string
     */
    public function getProfileUrl ()
    {
        return $this->_profileUrl;
    }
}