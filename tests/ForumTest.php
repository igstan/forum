<?php

require 'Forum.php';

use Forum\Forum;


class ForumTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getTopis()
    {
        $topics = array('Topic #1', 'Topic #2');
        $forum  = new Forum($topics);

        $this->assertEquals($topics, $forum->getTopics());
    }
}
