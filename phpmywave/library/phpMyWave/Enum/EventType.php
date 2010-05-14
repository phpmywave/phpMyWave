<?php
class phpMyWave_Enum_EventType
{
    /**
     * Namespace mapping list.
     * 
     * @var array
     */
    public static $namespaceMapping = array( 'ANNOTATED_TEXT_CHANGED'       => 'phpMyWave_Event_AnnotatedTextChangedEvent'
                                           , 'BLIP_CONTRIBUTORS_CHANGED'    => 'phpMyWave_Event_BlipContributorsChangedEvent'
                                           , 'BLIP_SUBMITTED'               => 'phpMyWave_Event_BlipSubmittedEvent'
                                           , 'DOCUMENT_CHANGED'             => 'phpMyWave_Event_DocumentChangedEvent'
                                           , 'FORM_BUTTON_CLICKED'          => 'phpMyWave_Event_FormButtonClickedEvent'
                                           , 'GADGET_STATE_CHANGED'         => 'phpMyWave_Event_GadgetStateChangedEvent'
                                           , 'OPERATION_ERROR'              => 'phpMyWave_Event_OperationErrorEvent'
                                           , 'UNKNOWN'                      => 'phpMyWave_Event_UnknownEvent'
                                           , 'WAVELET_BLIP_CREATED'         => 'phpMyWave_Event_WaveletBlipCreatedEvent'
                                           , 'WAVELET_BLIP_REMOVED'         => 'phpMyWave_Event_WaveletBlipRemovedEvent'
                                           , 'WAVELET_CREATED'              => 'phpMyWave_Event_WaveletCreatedEvent'
                                           , 'WAVELET_FETCHED'              => 'phpMyWave_Event_WaveletFetchedEvent'
                                           , 'WAVELET_PARTICIPANTS_CHANGED' => 'phpMyWave_Event_WaveletParticipantsChangedEvent'
                                           , 'WAVELET_SELF_ADDED'           => 'phpMyWave_Event_WaveletSelfAddedEvent'
                                           , 'WAVELET_SELF_REMOVED'         => 'phpMyWave_Event_WaveletSelfRemovedEvent'
                                           , 'WAVELET_TITLE_CHANGED'        => 'phpMyWave_Event_WaveletTitleChangedEvent'
                                           );

    /**
     * Method mapping list.
     * 
     * @var array
     */
    public static $methodMapping = array( 'ANNOTATED_TEXT_CHANGED'       => 'onAnnotatedTextChanged'
                                        , 'BLIP_CONTRIBUTORS_CHANGED'    => 'onBlipContributorsChanged'
                                        , 'BLIP_SUBMITTED'               => 'onBlipSubmitted'
                                        , 'DOCUMENT_CHANGED'             => 'onDocumentChanged'
                                        , 'FORM_BUTTON_CLICKED'          => 'onFormButtonClicked'
                                        , 'GADGET_STATE_CHANGED'         => 'onGadgetStateChanged'
                                        , 'OPERATION_ERROR'              => 'onOperationError'
                                        , 'UNKNOWN'                      => 'onUnknown'
                                        , 'WAVELET_BLIP_CREATED'         => 'onWaveletBlipCreated'
                                        , 'WAVELET_BLIP_REMOVED'         => 'onWaveletBlipRemoved'
                                        , 'WAVELET_CREATED'              => 'onWaveletCreated'
                                        , 'WAVELET_FETCHED'              => 'onWaveletFetched'
                                        , 'WAVELET_PARTICIPANTS_CHANGED' => 'onWaveletParticipantsChanged'
                                        , 'WAVELET_SELF_ADDED'           => 'onWaveletSelfAdded'
                                        , 'WAVELET_SELF_REMOVED'         => 'onWaveletSelfRemoved'
                                        , 'WAVELET_TITLE_CHANGED'        => 'onWaveletTitleChanged'
                                        );

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const ANNOTATED_TEXT_CHANGED = 'ANNOTATED_TEXT_CHANGED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const BLIP_CONTRIBUTORS_CHANGED = 'BLIP_CONTRIBUTORS_CHANGED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const BLIP_SUBMITTED = 'BLIP_SUBMITTED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const DOCUMENT_CHANGED = 'DOCUMENT_CHANGED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const FORM_BUTTON_CLICKED = 'FORM_BUTTON_CLICKED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const GADGET_STATE_CHANGED = 'GADGET_STATE_CHANGED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const OPERATION_ERROR = 'OPERATION_ERROR';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const UNKNOWN = 'UNKNOWN';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_BLIP_CREATED = 'WAVELET_BLIP_CREATED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_BLIP_REMOVED = 'WAVELET_BLIP_REMOVED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_CREATED = 'WAVELET_CREATED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_FETCHED = 'WAVELET_FETCHED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_PARTICIPANTS_CHANGED = 'WAVELET_PARTICIPANTS_CHANGED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_SELF_ADDED = 'WAVELET_SELF_ADDED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_SELF_REMOVED = 'WAVELET_SELF_REMOVED';

    /**
     * Constant for event type.
     * 
     * @var string
     */
    const WAVELET_TITLE_CHANGED  = 'WAVELET_TITLE_CHANGED';
    
    /**
     * Returns an array containing the constants of this enum type, in the order they are declared.
     * 
     * @return array
     */
    public static function values()
    {
        return array( self::ANNOTATED_TEXT_CHANGED
                    , self::BLIP_CONTRIBUTORS_CHANGED
                    , self::BLIP_SUBMITTED
                    , self::DOCUMENT_CHANGED
                    , self::FORM_BUTTON_CLICKED
                    , self::GADGET_STATE_CHANGED
                    , self::OPERATION_ERROR
                    , self::UNKNOWN
                    , self::WAVELET_BLIP_CREATED
                    , self::WAVELET_BLIP_REMOVED
                    , self::WAVELET_CREATED
                    , self::WAVELET_FETCHED
                    , self::WAVELET_PARTICIPANTS_CHANGED
                    , self::WAVELET_SELF_ADDED
                    , self::WAVELET_SELF_REMOVED
                    , self::WAVELET_TITLE_CHANGED
                    );
    }
}