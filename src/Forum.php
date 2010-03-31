<?php

namespace Forum;

class Forum
{
    private $topics;


    public function __construct($topics)
    {
        $this->topics = $topics;
    }

    public function getTopics()
    {
        return $this->topics;
    }
}
