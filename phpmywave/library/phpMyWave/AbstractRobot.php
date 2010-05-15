<?php
abstract class phpMyWave_AbstractRobot
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
    protected function getRobotName() {
        
        return get_class($this);
    }

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

    /**
     * Processes the incoming event bundle.
     * 
     * @param phpMyWave_EventMessageBundle $eventMessageBundle
     */
    public function processEvents(phpMyWave_EventMessageBundle $eventMessageBundle) {
        
        foreach ($eventMessageBundle->getEvents() as $event) {
            
            if (method_exists($this, phpMyWave_Enum_EventType::$methodMapping[$event->getType()])) {
                
                call_user_func(array($this, phpMyWave_Enum_EventType::$methodMapping[$event->getType()]), $event);
            }
        }
    }

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
    protected function onAnnotatedTextChanged($_event) {}

    // BlipContributorsChangedEvent
    protected function onBlipContributorsChanged($_event) {}

    // BlipSubmittedEvent
    protected function onBlipSubmitted($_event) {}

    // DocumentChangedEvent
    protected function onDocumentChanged($_event) {}

    // FormButtonClickedEvent
    protected function onFormButtonClicked($_event) {}

    // GadgetStateChangedEvent
    protected function onGadgetStateChanged($_event) {}

    // OperationErrorEvent
    protected function onOperationError($_event) {}

    // WaveletBlipCreatedEvent
    protected function onWaveletBlipCreated($_event) {}

    // WaveletBlipRemovedEvent
    protected function onWaveletBlipRemoved($_event) {}

    // WaveletCreatedEvent
    protected function onWaveletCreated($_event) {}

    // WaveletFetchedEvent
    protected function onWaveletFetched($_event) {}

    // WaveletParticipantsChangedEvent
    protected function onWaveletParticipantsChanged($_event) {}

    // WaveletSelfAddedEvent
    protected function onWaveletSelfAdded($_event) {}

    // WaveletSelfRemovedEvent
    protected function onWaveletSelfRemoved($_event) {}

    // WaveletTitleChangedEvent
    protected function onWaveletTitleChanged($_event)  {}
}