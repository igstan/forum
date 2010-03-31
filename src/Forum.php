<?php
/**
 * @author  Ionut G. Stan
 * @license http://opensource.org/licenses/bsd-license.php BSD License
 */

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
