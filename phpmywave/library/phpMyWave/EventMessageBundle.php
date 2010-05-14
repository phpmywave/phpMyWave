<?php
/**
 * EventMessageBundle class
 */
class phpMyWave_EventMessageBundle
{
    /**
     * @var phpMyWave_Wavelet
     */
    private $_wavelet;

    /**
     * @var array
     */
    private $_events = array();

    /**
     * @var array
     */
    private $_blips;

    /**
     * @var string
     */
    private $_robotAddress;

    /**
     * @var string
     */
    private $_rpcServerUrl;

    /**
     * @var unknown_type
     */
    private $_proxyingFor;

    /**
     * Create an EventMessageBundle from JSON data
     *
     * @param array $_jsonData
     *
     * @return EventMessageBundle
     */
    public static function fromJson($_jsonData)
    {
        $eventMessageBundle = new phpMyWave_EventMessageBundle();
        
        // Collect and add events.
        if (isset($_jsonData['events']['list']) && is_array($_jsonData['events']['list'])) {
            
            $events = array();
            
            foreach ($_jsonData['events']['list'] as $eventJSON) {
                
                if (isset($eventJSON['type'])) {
                    
                    // Default event values.
                    $eventType       = strtoupper((string) $eventJSON['type']);
                    
                    // Validate event type.
                    $eventType = strtoupper((string) $eventJSON['type']);
                    
                    if (!in_array($eventType, phpMyWave_Enum_EventType::values())) {
                        
                        throw new Exception('Invalid type "' . $eventType . '" detected');
                    }
                    
                    // Define event properties.
                    $eventNamespace  = phpMyWave_Enum_EventType::$namespaceMapping[$eventType];
                    $eventWavelet    = null; //@todo: missing!
                    $eventBundle     = null; //@todo: missing!
                    $eventModifiedBy = (isset($eventJSON['modifiedBy']))? (string) $eventJSON['modifiedBy']: '';
                    $eventTimestamp  = (isset($eventJSON['timestamp']))?  (int)    $eventJSON['timestamp']:  0;
                    $eventBlipId     = null; //@todo: missing!
                    
                    // Create event instance.
                    $events[] = new $eventNamespace( $eventType
                                                   , $eventWavelet
                                                   , $eventBundle
                                                   , $eventModifiedBy
                                                   , $eventTimestamp
                                                   , $eventBlipId
                                                   );
                }
            }
            
            $eventMessageBundle->setEvents($events);
        }
        
        //TODO Parse JSON data in new object
        return $eventMessageBundle;
    }

    /**
     * Add a blip to the blipdata
     *
     * @param string $_id
     */
    public function addBlip($_id, $_blip)
    {
        $this->_blips[$_id] = blip; //TODO BlipData?
    }

    /**
     *
     */
    public function getBlipData()
    {
        return $this->_blips;
    }

    /**
     * Add an event to the events that are tracked
     *
     * @param phpMyWave_Event $_event
     */
    public function addEvent($_event)
    {
        $this->_events[] = $_event;
    }

    /**
     * Returns events stored in the event message bundle.
     * 
     * @param array $_events
     */
    public function getEvents()
    {
        return $this->_events;
    }

    public function clear()
    {
        $this->_events = array();
        $this->_blips = array();
        $this->_wavelet = null;
    }

    /**
     *
     *
     * @return string
     */
    public function getProxyingFor()
    {
        return null; //TODO string
    }


    public function getRequiredBlips()
    {
        return null; //TODO java.util.Map<java.lang.String,java.util.Set<Context>>
    }

    public function getRobotAddress()
    {
        return $this->_robotAddress;
    }

    public function getRpcServerUrl()
    {
        return $this->_rpcServerUrl;
    }

    public function getWavelet()
    {
        return $this->_wavelet;
    }

    public function getWaveletData()
    {
        return null; //TODO WaveletData
    }

    /**
     * Return whether a blip is already in the blipdata
     */
    public function hasBlipId($_id)
    {
        return array_key_exists($_id, $this->_blips);
    }

    /**
     * Return whether the lookingFor event is contained in this bundle
     *
     * @param phpMyWave_EventType $_eventType
     *
     * @return bool
     */
    public function hasEvent($_eventType)
    {
        return null; //TODO
    }

    public function hasMessages()
    {
        return null; //TODO
    }

    /**
     * Require the availability of the specified blipId for this bundle
     */
    public function requireBlip($_blipId, $_contexts)
    {

    }

    public function setBlipData($_blipData)
    {
        $this->_blips = $_blipData;
    }

    /**
     * Adds given events to the event message bundle.
     * 
     * @param array $_events
     */
    public function setEvents(array $_events)
    {
        // Validate events.
        foreach ($_events as $event) {
            
            if (!$event instanceof phpMyWave_Event_Abstract) {
                
                throw new Exception('Invalid class; must be instace of phpMyWave_Event_Abstract');
            }
        }
        
        // Add to events.
        $this->_events = array_merge($this->_events, $_events);
    }

    public function setProxyingFor($_proxyingFor)
    {
        $this->_proxyingFor = $_proxyingFor;
    }

    public function setWavelet($_wavelet)
    {
        $this->_wavelet = $_wavelet;
    }

    public function setWaveletData($_waveletData)
    {

    }
}
