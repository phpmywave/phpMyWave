<?php
/**
 * Wavelet class
 */
class phpMyWave_Wavelet
{

    /**
     * @var array
     */
    private $_blips;

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * Deserializes the given WaveletData object into an instance of Wavelet
     *
     * @param OperationQueue $_operationQueue
     * @param array $_blips
     * @param WavletData $_waveletData
     * @return Wavelet
     */
    public static function deserialize($_operationQueue, $_blips, $_waveletData) {

    }

    /**
     * Returns a blip with the given id
     *
     * @param string the blip id
     * @return Blip the requested blip
     */
    public function getBlip($_blipId) {

    }

    /**
     * Returns all blips that are in this wavelet
     *
     * @return array all blips
     */
    public function getBlips() {

    }

    /**
     * Removes a blip from this wavelet
     *
     * @param Blip|string $_blip
     */
    public function deleteBlip($_blip)
    {

    }

    /**
     * Returns the creation time of this wavelet
     *
     * @return long the creation time
     */
    public function getCreationTime()
    {

    }

    /**
     * Returns the participant id of the creator of this wavelet
     *
     * @return string the creator of this wavelet
     */
    public function getCreator()
    {

    }

    /**
     * Returns the domain of this wavelet
     */
    public function getDomain()
    {

    }

    /**
     * Returns the data documents of this wavelet, which is a series of key-value pairs of data
     *
     * @return DataDocuments
     */
    public function getDataDocuments()
    {

    }

    /**
     * Returns the last modified time of this wavelet
     *
     * @return long
     */
    public function getLastModifiedTime()
    {

    }

    /**
     * Returns the operation queue that this wavelet uses to queue operation to
     * the robot proxy
     *
     * @return OperationQueue
     */
    protected function getOperationQueue()
    {

    }

    /**
     * Returns a list of participants of this wavelet
     *
     * @return Participants
     */
    public function getParticipants()
    {

    }

    /**
     * Returns the address of the robot that receives events or performs events
     * on this wavelet
     *
     * @return string
     */
    public function getRobotAddress()
    {

    }

    /**
     * Returns the root blip of this wavelet
     *
     * @return Blip
     */
    public function getRootBlip()
    {

    }

    /**
     * Returns the id of the root blip of this wavelet
     *
     * @return string
     */
    public function getRootBlipId()
    {

    }

    /**
     * Returns a list of tags of this wavelet
     *
     * @return Tags
     */
    public function getTags()
    {

    }

    /**
     * Returns the title of this wavelet
     *
     * @return string
     */
    public function getTitle()
    {

    }

    /**
     * Returns the wave id that owns this wavelet
     *
     * @return string
     */
    public function getWaveId()
    {

    }

    /**
     * Returns the id of this wavelet
     *
     * @return string
     */
    public function getWaveletId()
    {

    }

    /**
     * Returns a view of this wavelet that will proxy for the specified id
     *
     * @return phpMyWave_Wavelet
     */
    public function proxyFor($_proxyForId)
    {

    }

    /**
     * Replies to the conversation in this wavelet
     *
     * @return Blip
     */
    public function reply($_initialContent)
    {

    }

    /**
     * Serializes this Wavelet into a WaveletData
     *
     * @return phpMyWave_WaveletData
     */
    public function serialize()
    {

    }

    /**
     * Sets the address of the robot that receives events or performs events on
     * this wavelet
     */
    public function setRobotAddress($_address)
    {

    }

    /**
     * Sets the wavelet title
     */
    public function setTitle($_title)
    {

    }

    /**
     * Submit this wavelet when the given other wavelet is submitted
     *
     * @param Wavelet $_other
     */
    public function submitWith($_other)
    {

    }

}
