<?php
/**
 * @author  Ionut G. Stan
 * @license http://opensource.org/licenses/bsd-license.php BSD License
 */

namespace Forum\Test;

require 'Forum/Renderer.php';

use Forum\Forum;
use Forum\Renderer;


class RendererTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function renderTopicList()
    {
        $topics = array('Topic #1', 'Topic #2');

        $forum = $this->getMock('Forum', array('getTopics'));
        $forum->expects($this->any())
              ->method('getTopics')
              ->will($this->returnValue($topics));

        $templatesDir = __DIR__ . '/fixtures/templates';
        $forumRenderer = new Renderer($forum, $templatesDir);
        $finalOutput = file_get_contents(__DIR__ . '/fixtures/topic-list.html');

        $this->assertEquals($finalOutput, $forumRenderer->renderTopicList());
    }
}
