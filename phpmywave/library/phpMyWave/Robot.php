<?php
/**
 * Abstract Robot class
 */
abstract class phpMyWave_Robot implements phpMyWave_EventHandler
{

    /**
     * Creates a new wave with a list of participants on it
     *
     * @return Wavelet
     */
    public function newWave($_domain, $_participants, $_msg, $_proxyForId, $_rpcServerUrl) {}

    /**
     * Returns an empty/blind stub of a wavelet with the given wave id and wavelet id
     *
     * @return phpMyWave_Wavelet
     */
    public function blindWavelet($_waveId, $_waveletId, $_proxyForId = null, $_blips) {}

    /**
     * Fetches a wavelet using the active API
     *
     * @return Wavelet
     */
    public function fetchWavelet($_waveId, $_waveletId, $_proxyForId, $_rpcServerUrl) {}

    /**
     * Submits the pending operations associated with this Wavelet
     *
     * @return List of JsonRpcResponse
     */
    public function submit(Wavelet $_wavelet, $_rpcServerUrl) {}

    /**
     *
     * @param string $_name
     *
     * @return ParticipantProfile
     */
    protected function getCustomProfile($_name) {}

    /**
     * @return string
     */
    protected function getRobotName() {}

    /**
     * @return string
     */
    protected function getRobotAvatarUrl() {}

    /**
     * @return string
     */
    protected function getRobotProfilePageUrl() {}

    /**
     * @return boolean
     */
    protected function isUnsignedRequestsAllowed() {}

    /**
     * Computes this robot's capabilities, based on the overriden event handler methods, and their EventHandler.Capability annotations.
     */
    protected function computeCapabilityMap() {}

    protected function doGet($_request, $_response) {}

    protected function doPost($_request, $_response) {}

    /**
     * Processes the incoming event bundle
     */
    protected function processEvents(EventMessageBundle $_events) {}

    /**
     * Sets whether or not unsigned incoming requests from robot proxy are allowed
     */
    protected function setAllowUnsignedRequests($_allowUnsignedRequests) {}

    /**
     * Sets the OAuth related properties, including the consumer key and secret
     * that are used to sign the outgoing operations in the active mode
     */
    protected function setupOAuth($_consumerKey, $_consumerSecret, $_rpcServerUrl) {}

    /**
     * Sets up the verification token that is used for the owner verification step during the robot registration
     */
    protected function setupVerificationToken($_verificationToken, $_securityToken) {}

    // AnnotatedTextChangedEvent
    protected function onAnnotatedTextChanged($event) {}

    // BlipContributorsChangedEvent
    protected function onBlipContributorsChanged($event) {}

    // BlipSubmittedEvent
    protected function onBlipSubmitted($event) {}

    // DocumentChangedEvent
    protected function onDocumentChanged($event) {}

    // FormButtonClickedEvent
    protected function onFormButtonClicked($event) {}

    // GadgetStateChangedEvent
    protected function onGadgetStateChanged($event) {}

    // OperationErrorEvent
    protected function onOperationError($event) {}

    // WaveletBlipCreatedEvent
    protected function onWaveletBlipCreated($event) {}

    // WaveletBlipRemovedEvent
    protected function onWaveletBlipRemoved($event) {}

    // WaveletCreatedEvent
    protected function onWaveletCreated($event) {}

    // WaveletFetchedEvent
    protected function onWaveletFetched($event) {}

    // WaveletParticipantsChangedEvent
    protected function onWaveletParticipantsChanged($event) {}

    // WaveletSelfAddedEvent
    protected function onWaveletSelfAdded($event) {}

    // WaveletSelfRemovedEvent
    protected function onWaveletSelfRemoved($event) {}

    // WaveletTitleChangedEvent
    protected function onWaveletTitleChanged($event)  {}

}
