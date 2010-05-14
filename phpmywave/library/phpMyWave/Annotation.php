<?php
class phpMyWave_Annotation
{
    /**
     *  Some constants for style related annotation keys.
     */
    const BACKGROUND_COLOR = "style/backgroundColor";
    const COLOR = "style/color";
    const FONT_FAMILY = "style/fontFamily";
    const FONT_SIZE = "style/fontSize";
    const FONT_STYLE = "style/fontStyle";
    const FONT_WEIGHT = "style/fontWeight";
    const TEXT_DECORATION = "style/textDecoration";
    const VERTICAL_ALIGN = "style/verticalAlign";

    /**
     * constructor
     *
     * The original java class has an overloaded constructor which
     * allows to submit either $start and $end or $range
     *
     * Thus we make this paremeters optional here
     *
     * @param $name - the name of this annotation.
     * @param $value - value - the value of this annotation.
     * @param $start - start - the starting index of this annotation.
     * @param $end - the end index of this annotation.
     * @param $range - the range of this annotation.
     *
     */
    public function __construct($name, $value, $start = false, $end = false, phpMyWave_Range $range = false) {

    }

    /**
     * Returns the name of this annotation.
     * @return - the annotation's name.
     */
    public function getName() {

    }


    /**
     * Returns the value of this annotation.
     * @return - the annotation's value.
     */
    public function getValue() {

    }


    /**
     * Returns the range of this annotation.
     * @return - the annotation's range.
     */
    public function getRange() {

    }

    /**
     * Shifts this annotation by shiftAmount if it is on a range that is after or covers the given position.
     *
     * @param $position - the anchor position.
     * @param $shiftAmount - the amount to shift the annotation range.
     * @return void
     */
    public function shift($position, $shiftAmount) {

    }

    /**
     * magic method used when the object is used as a string
     */
    public function __toString($position, $shiftAmount) {

    }
