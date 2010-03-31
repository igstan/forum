<?php

namespace Forum;

class Forum
{
    private $dataStore;


    public function __construct($dataStore)
    {
        $this->dataStore = $dataStore;
    }

    public function getTopics()
    {
        return $this->dataStore->fetchTopics();
    }

    public function createTopic($topicTitle, $firstPost)
    {
        $this->dataStore->saveTopic($topicTitle, $firstPost);
    }
}
