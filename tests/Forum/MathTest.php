<?php
/**
 * You have to implement a simple mathematical expression evaluator. Given a
 * mathematical expression in the form of a string, like "3 * 2 + 5", your
 * function should return the computed result of the expression, which is 11
 * in the above case.
 *
 * Below you'll find test cases that will incrementally require more features
 * to be implemented. It will first require a simple expression, like a single
 * digit number to be evaluated. Next, it will require you to implement addition.
 *
 * As you'll see, division tests do no appear, and this time you'll have to
 * implement the test cases too. First, write the test case methods (there may
 * be two or three of them) and then write the implementation for them.
 *
 * Hint: don't try to solve all of the test cases below at once. Solve them
 * step by step. The first test case is already solved for you. Then solve the
 * second test case. As soon as the second test method passes, start implementing
 * the third, and so on.
 *
 * To run this test case, execute the following command in the "tests" dir:
 *
 *      phpunit Forum/MathTest
 *
 *
 * This problem has been taken from http://sites.google.com/site/tddproblems.
 *
 * For more info in PHPUnit, consult its manual:
 *      http://www.phpunit.de/manual/current/en/index.html
 *
 * @author  Ionut G. Stan
 * @license http://opensource.org/licenses/bsd-license.php BSD License
 */

require 'Forum/Math.php';

/**
 * Use the namespace under which the "evaluate()" function resides.
 */
use Forum\Math;


/**
 * This is the PHPUnit TestCase that verifies the correctness of the evaluate()
 * function. You should implement this function in the src/Forum/Math.php file,
 * under the namespace Forum\Math. Read CODING-STANDARDS for project directory
 * structure and namespace standards.
 */
class MathTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function singleDigitExpressions1()
    {
        $this->assertEquals(0, Math\evaluate("0"));
    }

    /**
     * @test
     */
    public function singleDigitExpressions2()
    {
        $this->assertEquals(1, Math\evaluate("1"));
    }

    /**
     * @test
     */
    public function multiDigitExpression1()
    {
        $this->assertEquals(10, Math\evaluate("10"));
    }

    /**
     * @test
     */
    public function multiDigitExpression2()
    {
        $this->assertEquals(20, Math\evaluate("20"));
    }

    /**
     * @test
     */
    public function additionBetweenSingleDigitNumbers1()
    {
        $this->assertEquals(1, Math\evaluate("0+1"));
    }

    /**
     * @test
     */
    public function additionBetweenSingleDigitNumbers2()
    {
        $this->assertEquals(2, Math\evaluate("1+1"));
    }

    /**
     * @test
     */
    public function additionWithSpacesAroundTheOperator()
    {
        $this->assertEquals(2, Math\evaluate("1 + 1"));
    }

    /**
     * @test
     */
    public function additionBetweenMultiDigitNumbers()
    {
        $this->assertEquals(579, "123 + 456");
    }

    /**
     * @test
     */
    public function subtractionBetweenSingleDigitNumbers1()
    {
        $this->assertEquals(2, Math\evaluate("3-1"));
    }

    /**
     * @test
     */
    public function subtractionBetweenMultiDigitNumbers2()
    {
        $this->assertEquals(10, Math\evaluate("20-10"));
    }

    /**
     * @test
     */
    public function subtractionWithSpacesAroundTheOperator()
    {
        $this->assertEquals(1, Math\evaluate("2 - 1"));
    }

    /**
     * @test
     */
    public function multiplicationBetweenSingleDigitNumbers()
    {
        $this->assertEquals(6, Math\evaluate("3 * 2"));
    }

    /**
     * @test
     */
    public function multiplicationBetweenMultiDigitNumbers()
    {
        $this->assertEquals(144, Math\evaluate("12 * 12"));
    }

    /**
     * @test
     */
    public function combinedExpression()
    {
        $this->assertEquals(11, Math\evaluate("3 * 2 + 5"));
    }
}
