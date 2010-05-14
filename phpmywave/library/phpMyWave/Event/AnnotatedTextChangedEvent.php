<?php
class phpMyWave_Event_AnnotatedTextChangedEvent extends phpMyWave_Event_Abstract
{

    /**
     * @var string
     */
    private static $_eventType = phpMyWave_Enum_EventType::ANNOTATED_TEXT_CHANGED;

    /**
     * @var string
     */
    private $_name;

    /**
     * @var string
     */
    private $_value;

    /**
     * Constructor
     *
     * @param $_wavelet
     * @param $_bundle
     * @param $_modifiedBy
     * @param $_timestamp
     * @param $_blipId
     * @param $_name
     * @param $_value
     */
    public function phpMyWave_Event_AnnotatedTextChangedEvent(
        phpMyWave_Wavelet $_wavelet,
        phpMyWave_EventMessageBundle $_bundle,
        $_modifiedBy,
        $_timestamp,
        $_blipId,
        $_name,
        $_value)
    {
        $this->_name = $_name;
        $this->_value = $_value;
        parent::__construct(self::$_eventType, $_bundle, $_modifiedBy, $_timestamp, $_blipId);
    }

    /**
     * Returns the name of the annotation
     *
     * @return string the name of the annotation
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Returns the value of the annotation that changed
     *
     * @return string the value of the annotation that changed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * Helper method for type conversion
     *
     * @param phpMyWave_Event_Abstract $_event
     *
     * @return phpMyWave_Event_AnnotatedTextChangedEvent the concrete type of this event, or null if it is of a different event type
     */
    public static function convert($_event)
    {

    }

}
