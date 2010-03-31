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
        return $this->renderTemplate('topic-list.phtml', array(
            'topics' => $this->forum->getTopics(),
        ));
    }

    public function renderTopic($topic)
    {
        return $this->renderTemplate('topic.phtml', array(
            'posts' => $topic->getPosts(),
        ));
    }

    protected function renderTemplate($templatePath, $data)
    {
        ob_start();

        extract($data);
        require $this->templatesDir . '/' . $templatePath;

        return ob_get_clean();
    }
}
