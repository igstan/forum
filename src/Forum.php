<?php

namespace Forum;

class Forum
{
    private $topics;

    private $dataStore;


    public function __construct($topics, $dataStore)
    {
        $this->topics = $topics;
        $this->dataStore = $dataStore;
    }

    public function getTopics()
    {
        return $this->topics;
    }

    public function createTopic($topicTitle, $firstPost)
    {
        $this->dataStore->saveTopic($topicTitle, $firstPost);
    }
}
