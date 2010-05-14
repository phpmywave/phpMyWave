<?php
/**
 * An abstract class that models a blip content.
 *
 * @author Frank Ruske <frank.ruske@mayflower.de>
 *
 */
abstract class phpMyWave_BlipContent_Abstract
{
    /**
     * constructor
     */
    public function __construct() {

    }

    /**
     * Returns the textual representation of of this blip content,
     * for example, if it's an element, it returns a space.
     *
     * @return     string   $txt - the textual representation.
     */
    public function getText() {
    //public abstract java.lang.String getText()
    }


    /**
     * Returns this blip content as an element.
     *
     * @return     mixed   $element - an instance of phpMyWave_BlipContent_Element,
     *                                or null if it is not an Element.
     */
    public function asElement() {
    //public Element asElement()
      return $element;
    }

    /**
     * Returns this blip content as a plain-text.
     *
     * @return     mixed   $element - an instance of phpMyWave_BlipContent_Plaintext,
     *                                or null if it is not a Plaintext.
     */
    public function asPlaintext() {
    //public Plaintext asPlaintext()
      return $element;
    }

}
