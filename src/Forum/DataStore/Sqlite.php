<?php
/**
 * @author  Ionut G. Stan
 * @license http://opensource.org/licenses/bsd-license.php BSD License
 */

namespace Forum\DataStore;


class Sqlite
{
    private $pdo;


    function __construct($sqlitePath)
    {
        $this->pdo = new \PDO('sqlite:' . $sqlitePath);
    }

    public function fetchPosts()
    {
        $posts = $this->pdo->query('SELECT * FROM posts')
                           ->fetchAll(\PDO::FETCH_ASSOC);

        return $posts;
    }
}
