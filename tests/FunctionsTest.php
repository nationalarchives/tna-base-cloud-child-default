<?php

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }

    public function test_dequeue_parent_style()
    {
        $this->assertTrue(function_exists('dequeue_parent_style'));
    }
    public function test_tna_child_styles()
    {
        $this->assertTrue(function_exists('tna_child_styles'));
    }
}
