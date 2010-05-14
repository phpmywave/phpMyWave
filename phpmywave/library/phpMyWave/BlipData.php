<?php
/**
 * BlipData is the serializable data representation of a Blip.
 * It contains metadata, a text-only representation of the document content,
 * and a list of annotations.
 *
 * @author Frank Ruske <frank.ruske@mayflower.de>
 *
 */
class phpMyWave_BlipData
{

    /**
     * Constructs an empty BlipData object or a BlibData object
     *
     * If no paremeters are given we create an empty BlibData object
     *
     * @param  string  $waveId - the wave id of the blip.
     * @param  string  $waveletId - the wavelet id of the blip.
     * @param  string  $blipId - the blip id.
     * @param  string  $initialContent - the initial content of the blip. If the supplied content doesn't start with a newline character, this constructor will auto-prepend that.
     *
     */
    public function __construct($waveId = false, $waveletId = false, $blipId = false, $initialContent = false) {

    }

    /**
     * Adds an annotation to the end of the list of annotations.
     *
     * @param   phpMyWave_Annotation   $annotation - the annotation to be added.
     * @return  void
     */
    public function addAnnotation(phpMyWave_Annotation $annotation) {

    }

    /**
     * Returns the list of annotations modifying this document's content.
     *
     * @param   void
     * @see     class phpMyWave_Annotation
     * @return  $annotations list of annotations.
     */
    public function getAnnotations() {
        //public java.util.List<Annotation> getAnnotations()
        return $annotations;
    }


    /**
     * Adds an element to the blip at a given index into the text document.
     *
     * @param   int                     $position - The character position / index into the document to insert the form element.
     * @param   phpMyWave_Blip_Element  $element  - The form element to be added.
     * @return  void
     */
    public function addElement($position, phpMyWave_Blip_Element $element) {

    }

    /**
     * Returns a map of the elements in the blip and the
     * positions where they have been inserted.
     *
     * @param   void
     * @return  array       $map - the map of form elements to document positions.
     */
    public function getElements() {
        // public java.util.Map<java.lang.Integer,Element> getElements()
        return $map;
    }

    /**
     * Replaces the blip's list of elements with a new list of elements.
     *
     * @param   string                  $map - something like
     *                                         $position, phpMyWave_Blip_Element $element
     * @return  void
     */
    public function setElements(array $map) {
        // public void setElements(java.util.Map<java.lang.Integer,Element> map)
    }


    /**
     * Returns the Blip ID for this blip.
     *
     * @param   void
     * @return  string      $id - the blip id for this blip.
     */
    public function getBlipId() {
        return $blibId;
    }

    /**
     * Returns a list of child Blip IDs for this blip.
     *
     * @param   void
     * @return  array      $blibIds - a list of child Blip IDs.
     */
    public function getChildBlipIds() {
        $blibIds = array();
        // public java.util.List<java.lang.String> getChildBlipIds()
        return $blibIds;
    }

    /**
     * Returns the list of email addresses
     * corresponding to the contributors who have modified this blip's content.
     *
     * @param   void
     * @return  array      $contributors - the list of contributors.
     */
    public function getContributors() {
        $contributors = array();
        // public java.util.List<java.lang.String> getContributors()
        return $contributors;
    }

    /**
     * Returns the email address corresponding to the creator of this blip.
     *
     * @param   void
     * @return  string      $creator - the creator of this blip.
     */
    public function getCreator() {
        $creator = "";
        // public java.lang.String getCreator()
        return $creator;
    }

    /**
     * Returns the text document content for this blip.
     *
     * @param   void
     * @return  string       $content - the text document content for this blip.
     */
    public function getContent() {
        $content = "";
        // public java.lang.String getContent()
        return $content;
    }

    /**
     * Returns the time in milliseconds since the
     * UNIX epoch when this blip was last modified.
     *
     * @param   void
     * @return  string      $ts - the last modified time for this blip.
     */
    public function getLastModifiedTime() {
        $ts = "";
        // public long getLastModifiedTime()
        return $ts;
    }

    /**
     * Returns the parent Blip ID for this blip.
     * UNIX epoch when this blip was last modified.
     *
     * @param   void
     * @return  string      $parentBlipId - the parent Blip ID for this blip.
     */
    public function getParentBlipId() {
        $parentBlipId = "";
        // java.lang.String getParentBlipId()
        return $parentBlipId;
    }


    /**
     * Returns the version number for this blip.
     *
     * @param   void
     * @return  string      $version - the version number for this blip.
     */
    public function getVersion() {
        $version = "";
        // public long getVersion()
        return $version;
    }

    /**
     * Returns the Wave ID for the wave containing this blip.
     *
     * @param   void
     * @return  string      $version - the Wave ID for the wave containing this blip.
     */
    public function getWaveId() {
        $waveId = "";
        // public java.lang.String getWaveId()
        return $waveId;
    }

    /**
     * Returns the Wavelet ID for the wavelet containing this blip.
     *
     * @param   void
     * @return  string      $waveletId - the Wavelet ID for the wavelet containing this blip.
     */
    public function getWaveletId() {
        $waveletId = "";
        // public java.lang.String getWaveletId()
        return $waveletId;
    }

    /**
     * Replaces the blip's list of annotations with a new list of annotations.
     *
     * @param   phpMyWave_Annotations   $annotations - the new list of annotations.
     * @return  void
     */
    public function setAnnotations(phpMyWave_Annotations $annotations) {
        // public void setAnnotations(java.util.List<Annotation> annotations)
    }

    /**
     * Returns the Blip ID for this blip.
     *
     * @param   string   $blipId - the Blip ID for this blip.
     * @return  void
     */
    public function setBlipId($blipId) {
        // public void setBlipId(java.lang.String blipId)
    }

    /**
     * Replaces the blip's list of child Blip IDs with a new list.
     *
     * @param   array   $childBlipIds - the new list of child Blip IDs.
     * @return  void
     */
    public function setChildBlipIds($childBlipIds) {
        // public void setChildBlipIds(java.util.List<java.lang.String> childBlipIds)
    }

    /**
     * Adds a new child blip id to this blip's list of child id's.
     *
     * @param   string   $blipId - the Blip ID to be added.
     * @return  void
     */
    public function addChildBlipId($blipId) {
        // public void addChildBlipId(java.lang.String blipId)
    }

    /**
     * Replaces the blip's list of contributors with a new list.
     *
     * @param   array   $contributors - the new list of contributors.
     * @return  void
     */
    public function setContributors($contributors) {
        // public void setContributors(java.util.List<java.lang.String> contributors)
    }

    /**
     * Adds a contributor to this blip's list of contributors.
     *
     * @param   string   $contributor - a new contributor to the blip.
     * @return  void
     */
    public function addContributor($contributors) {
        // public void addContributor(java.lang.String contributor)
    }

    /**
     * Sets the creator of the blip.
     *
     * @param   string   $creator - the creator of the blip.
     * @return  void
     */
    public function setCreator($creator) {
        // public void setCreator(java.lang.String creator)
    }

    /**
     * Replaces the blip's text document content.
     *
     * @param   string   $content - the new text content for the blip.
     * @return  void
     */
    public function setContent($content) {
        // public void setContent(java.lang.String content)
    }

    /**
     * Sets the last modified time measured in milliseconds since the
     * UNIX epoch when the blip was last modified.
     *
     * @param   string   $lastModifiedTime - the last modified time of the blip
     * @return  void
     */
    public function setLastModifiedTime($lastModifiedTime) {
        // public void setLastModifiedTime(long lastModifiedTime)
    }

    /**
     * Set's the parent Blip ID for the blip.
     *
     * @param   string   $parentBlipId - the parent blip id.
     * @return  void
     */
    public function setParentBlipId($parentBlipId) {
        // public void setParentBlipId(java.lang.String parentBlipId)
    }

    /**
     * Sets the version of the blip.
     *
     * @param   string   $version - the version of the blip.
     * @return  void
     */
    public function setVersion($version) {
        // public void setVersion(long version)
    }

    /**
     * Sets the Wave ID of the blip.
     *
     * @param   string   $waveId - the Wave ID of the blip.
     * @return  void
     */
    public function setWaveId($waveId) {
        // public void setWaveId(java.lang.String waveId)
    }

    /**
     * Sets the Wavelet ID of the blip.
     *
     * @param   string   $waveletId - the Wavelet ID of the blip.
     * @return  void
     */
    public function setWaveletId($waveletId) {
        // public void setWaveletId(java.lang.String waveletId)
    }


    /**
     * Sets the Wavelet ID of the blip.
     *
     * @param   string   $blipId - the ChildBlipId to be removed
     * @return  void
     */
    public function removeChildBlipId($blipId) {
        // public void removeChildBlipId(java.lang.String blipId)
    }


}