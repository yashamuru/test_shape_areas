<?php
use PHPUnit\Framework\TestCase;
use Enables\Task3\TagWriter;

class TagWriterTest extends TestCase
{
    /** @var  \Enables\TagWriter $tagWriter */
    private $tagWriter;

    /**
     * Simplified setup:
     *  OpenTag == char
     *  ClosingTag = ~char
     */
    protected function setUp() {
        $this->tagWriter = new TagWriter();

        $this->tagWriter->setOpenTag("%s");
        $this->tagWriter->setClosingTag("~%s");
        $this->tagWriter->setNewLineCharacter("");
        $this->tagWriter->setOffsetCharacter("");
    }

    public function testEmpty() {
        $this->assertEmpty($this->tagWriter->process(""));
    }

    public function testItOutputsClosingTags() {
        $this->assertEquals("abcdef~f~e~d~c~b~a", $this->tagWriter->process("abcdef"));
    }

    public function testItOutputsLevels() {
        $this->tagWriter->setOffsetCharacter(" ");
        $this->assertEquals("a b  c  ~c ~b~a", $this->tagWriter->process("abc"));
    }

}
