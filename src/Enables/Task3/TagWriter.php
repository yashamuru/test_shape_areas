<?php

namespace Enables\Task3;


class TagWriter {

    private $openingTag = "<%s>";
    private $closingTag = "</%s>";
    private $offsetCharacter = " ";
    private $newLineCharacter = PHP_EOL;

    /**
     * Setter for the OpenTag template.
     *
     * @param $value - sprintf template e.g. <%s>
     */
    public function setOpenTag($value) {
        $this->openingTag = $value;
    }

    /**
     * Setter for the CloseTag template.
     *
     * @param $value - sprintf template e.g. </%s>
     */
    public function setClosingTag($value) {
        $this->closingTag = $value;
    }

    /**
     * Setter for the offset character to mark the offsets.
     * (Space by default).
     * @param $value
     */
    public function setOffsetCharacter($value) {
        $this->offsetCharacter = $value;
    }

    /**
     * Setter for the newline character to show after every tag.
     * @param $value
     */
    public function setNewLineCharacter($value) {
        $this->newLineCharacter = $value;
    }

    /**
     * A helper function to show the offset for the current level
     *
     * @param $level - The current level.
     * @return string
     */
    private function offset($level) {
        return str_repeat($this->offsetCharacter, $level);
    }

    /**
     * A helper function to write the opening Tag.
     *
     * @param string $char   - The current tag to write
     * @param int $level  - The current offset
     * @return string
     */
    private function writeOpenTag($char, $level) {
        return $this->offset($level).sprintf($this->openingTag, $char).$this->newLineCharacter;
    }

    /**
     * A helper function to write the closing Tag.
     *
     * @param string $char   - The current tag to write
     * @param int $level  - The current offset
     * @return string
     */
    private function writeClosingTag($char, $level) {
        return $this->offset($level).sprintf($this->closingTag, $char).$this->newLineCharacter;
    }

    /**
     * A function to process a sequence of characters in a hierarchical/html-like way.
     * Recursive.
     *
     * @param $string - The string left to process.
     * @param int $level- The current level.
     *
     * @return string
     */
    public function process($string, $level = 0) {
        if (empty($string)) {
            return '';
        } else {
            $char = $string[0];
            $string = substr($string,1);
            $nextLevel = $level+1;

            return $this->writeOpenTag($char, $level).
                   $this->process($string, $nextLevel).
                   $this->writeClosingTag($char, $level);
        }
    }
}