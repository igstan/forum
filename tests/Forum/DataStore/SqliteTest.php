<?php
/**
 * @author  Ionut G. Stan
 * @license http://opensource.org/licenses/bsd-license.php BSD License
 */

namespace Forum\DataStore\Test;

require 'PHPUnit/Extensions/Database/TestCase.php';
require 'Forum/DataStore/Sqlite.php';

use Forum\DataStore\Sqlite;


class SqliteTest extends \PHPUnit_Extensions_Database_TestCase
{
    private static $databasePath;


    public static function setUpBeforeClass()
    {
        static::$databasePath = __DIR__ . '/fixtures/db.sqlite';

        $pdo = new \PDO('sqlite:' . static::$databasePath);
        $pdo->query(
            "CREATE TABLE 'posts' (
                'id' INTEGER PRIMARY KEY AUTOINCREMENT,
                'content' VARCHAR
            )"
        );
    }

    public static function tearDownAfterClass()
    {
        unlink(static::$databasePath);
    }

    protected function getConnection()
    {
        $this->pdo = new \PDO('sqlite:' . static::$databasePath);
        return $this->createDefaultDBConnection($this->pdo, $schema=null);
    }

    protected function getDataSet()
    {
        return $this->createXMLDataSet(__DIR__ . '/fixtures/initial-db.xml');
    }

    /**
     * @test
     */
    public function fetchTopics()
    {
        $expectedPosts = array(
            array(
                'id'      => 1,
                'content' => 'Post #1',
            ),
            array(
                'id'      => 2,
                'content' => 'Post #2',
            ),
        );

        $dataStore = new Sqlite(static::$databasePath);
        $posts = $dataStore->fetchPosts();

        $this->assertEquals($expectedPosts, $posts);
    }
}
