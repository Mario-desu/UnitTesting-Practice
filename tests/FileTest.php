<?php
namespace TDD\Test;
// declare(strict_types=1); 
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
require_once "Dog.php";
use TDD\SrcFile; // imports SrcFile class
// Create Test Class

/*
* @covers TDD\SrcFile
*/

/*
*zum testen in terminal für mehr Details
vendor\bin\phpunit --testdox*/


class FileTest extends TestCase {
 
    public function testSum() {

        $obj = new SrcFile(); // dummy object for testing
        $input = [0, 2, 5, 8]; // put the inputs in its own array
        $output = $obj->sum($input); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            15, // 1st param is the expected value
            $output, // 2nd param is the $output variable
            'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
        );
    }

   public function testSumFive() {

    $obj = new SrcFile();
    $input = [5,4,3,2,1];
    $output = $obj->sumFive($input);
    $this->assertEquals(15,$output,'When summing the 5 numbers total should equal 15');
    
   }

   public function testNumberAverage(){
       $obj = new SrcFile();
       $input = [4,8,10,2,6];
       $output = $obj->numberAverage($input);
       $this->assertEquals(6, $output,'The average number should be 6');
   }

   public function testAgeCalc() {
    $obj = new SrcFile(); // dummy object for testing    
    $output = $obj->ageCalc(2021, 2008);
    $this->assertEquals(13, 
    $output,
    'Wrong age calculated, expected: 13'   
    );
}


}

