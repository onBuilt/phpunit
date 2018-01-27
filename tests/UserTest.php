<?php
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    // test the talk method
    public function testTalk() {
        // make an instance of the user
        $user = new User();

        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
    public function testTalkThis() {
        // make an instance of the user
        $user = new User();

        // use assertEquals to ensure the greeting is what you
        $expected = "Sami";
        $actual = $user->talkThis($expected);
        $this->assertEquals($expected, $actual);
    }
}