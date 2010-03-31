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

        $dataStore = $this->getMock('StdClass', array('fetchTopics'));
        $dataStore->expects($this->any())
                  ->method('fetchTopics')
                  ->will($this->returnValue($topics));

        $forum = new Forum($dataStore);

        $this->assertEquals($topics, $forum->getTopics());
    }

    /**
     * @test
     */
    public function createTopic()
    {
        $topicTitle = 'First topic';
        $firstPost = 'First post';

        $dataStore = $this->getMock('StdClass', array('saveTopic'));
        $dataStore->expects($this->once())
                  ->method('saveTopic')
                  ->with($this->equalTo($topicTitle), $this->equalTo($firstPost));

        $forum = new Forum($dataStore);
        $forum->createTopic($topicTitle, $firstPost);
    }
}
