<?php

use PHPUnit\Framework\TestCase;

use Grading\SimpleGrading;

class SimpleGradingTest extends TestCase {

    private $simpleGrading;

    /**
     * @group simple
     **/
    public function testStudentShouldHasGradeA() {
        // Given
        $simpleGrading = new SimpleGrading;

        // When
        $grade = $simpleGrading->evaluate('1234567890', 85);

        // Then
        $this->assertEquals("1234567890 => 'A'", $grade);
    }

    /**
     * @group simple
     **/
    public function testStudentShouldHasGradeB() {
        // Given
        $simpleGrading = new SimpleGrading;

        // When
        $grade = $simpleGrading->evaluate('1234567890', 40);

        // Then
        $this->assertEquals("1234567890 => 'F'", $grade);
    }

    /**
     * @group simple
     **/
    public function testStudentShouldHasGradeC() {
        // Given
        $simpleGrading = new SimpleGrading;

        // When
        $grade = $simpleGrading->evaluate('1234567899', 65);

        // Then
        $this->assertEquals("1234567899 => 'C'", $grade);
    }

    /**
     * @group simple
     **/
    public function testStudentShouldHasGradeF() {
        // Given
        $simpleGrading = new SimpleGrading;

        // When
        $grade = $simpleGrading->evaluate('1234567890', 40);

        // Then
        $this->assertEquals("1234567890 => 'F'", $grade);
    }

}
