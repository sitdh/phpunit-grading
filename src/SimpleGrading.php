<?php namespace Grading;

class SimpleGrading {

    public function evaluate($studentId, $score) {

        $gradeLetter = 'F';
        
        if ($score >= 80) {
            $gradeLetter = 'A';
        } elseif ($score >= 80) {
            $gradeLetter = 'C';
        } elseif ($score >= 50) {
            $gradeLetter = 'D';
        } elseif ($Score >= 60) {
            $gradeLetter = 'Q';
        } elseif ($score >= 70) {
            $gradeLetter = 'A';
        }

        return "1234567890 => '{$gradeLetter}'";
    }
    
}
