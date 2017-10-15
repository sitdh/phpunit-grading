<?php

use PHPUnit\Framework\TestCase;

use Grading\Grading;
use Grading\Student;

class GradingTest extends TestCase {

  public function testCanPerformUnitTest() {
    $this->assertTrue(true);
  }

  public function testCanEvaluateStudentScore() {

    // Given
    $grading = new Grading();

    $student = $this->createMock(Student::class);
    $student->method('getBaseScore')
      ->willReturn(95);

    // When
    $gradeLetter = $grading->evaluate($student);

    // Then
    $this->assertEquals('A', $gradeLetter);
  }

  public function testCanEvaluateStudentScoreForGradeB() {

    // Given
    $grading = new Grading();

    $student = $this->createMock(Student::class);
    $student->method('getBaseScore')
      ->willReturn(75);

    // When
    $gradeLetter = $grading->evaluate($student);

    // Then
    $this->assertEquals('B', $gradeLetter);
  }
}
