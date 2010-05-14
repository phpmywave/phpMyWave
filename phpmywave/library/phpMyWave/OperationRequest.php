<?php
/**
 * A class that represents an operation request.
 *
 * @author Martin Brotzeller <martin.brotzeller@mayflower.de>
 * @version $Id: $
 *
 */
class phpMyWave_OperationRequest
{
    /**
     * Constructor
     *
     * @param string $method
     * @param string $id
     * @param string $waveId
     * @param string $waveletId
     * @param string $blipId
     * @param array $parameters
     *
     * @return void
     */
    public function __construct($method, $id, $waveId = null, $waveletId = null, $blipId = null, $parameters = array()) {

    }
    /**
     * Alternative to standard Constructor
     *
     * @param string $method
     * @param string $id
     * @param phpMyWave_BlipData $blipdata
     * @param array $parameters
     *
     * @return phpMyWave_OperationRequest
     */
    public static function constructFromBlipData($method, $id, $blipdata, $parameters) {

    }
    /**
     * Adds a parameter to this request.
     *
     * @param OperationRequestParameter $parameter
     *
     * @return void
     */
    public function addParameter($parameter) {

    }

    /**
     * Returns the blip id where this request should be invoked on.
     *
     * @return string
     */
    public function getBlipId() {

    }
    /**
     * @return string
     */
    public function getId() {

    }
    /**
     * @return string
     */
    public function getMethod() {

    }
    /**
     * @param phpMyWave_Enum_JsonRpcConstantResponseProperty $property
     *
     * @return string
     */
    public function getParameter($property) {

    }
    /**
     * @return phpMyWave_Enum_JsonRpcConstantResponseProperty
     */
    public function getParams() {

    }
    /**
     * @return string
     */
    public function getWaveId() {

    }
    /**
     * @return string
     */
    public function getWaveletId() {

    }
    /**
     * @return string
     */
    public function toString() {

    }
}