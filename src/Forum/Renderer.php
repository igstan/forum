<?php

namespace Forum;

class Renderer
{
    private $forum;

    private $templatesDir;


    public function __construct($forum, $templatesDir)
    {
        $this->forum = $forum;
        $this->templatesDir = $templatesDir;
    }

    public function renderTopicList()
    {
        ob_start();

        $topics = $this->forum->getTopics();
        require $this->templatesDir . '/topic-list.phtml';

        return ob_get_clean();
    }
}
