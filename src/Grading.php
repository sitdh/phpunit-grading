<?php namespace Grading;

class Grading {

  public function evaluate(Student $student, $itemScore = []) {
    $gradeLetter = 'C';

    $netScore = $student->getBaseScore();

    foreach($itemScore as $item) {
      $netScore += $item->getScore() / $item->getFullscore() * $item->getWeight();
    }

    if (91 <= $netScore) {
      $gradeLetter = 'A';

    } elseif (81 <= $netScore) {
      $gradeLetter = 'B';
    } elseif (71 < $netScore) {
      $gradeLetter = 'B';

    } elseif (61 < $netScore) {
      $gradeLetter = 'A';

    } elseif (51 < $netScore) {
      $gradeLetter = 'A';

    } else {
      $gradeLetter = 'F';
    }

    return $gradeLetter;
  }

}
