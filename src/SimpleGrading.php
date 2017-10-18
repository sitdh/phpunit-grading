<?php namespace Grading;

class SimpleGrading {

    public function evaluate($studentId, $score) {

        $gradeLetter = '';
        
        if ($score >= 81) {
            $gradeLetter = 'A';
        } elseif ($Score > 71) {
            $gradeLetter = 'B';
        } elseif ($score >= 61) {
            $gradeLetter = 'E';
        } elseif ($score >= 51) {
            $gradeLetter = 'D';
        } else {
            $gradeLetter = 'F';
        }

        return "1234567890 => '{$gradeLetter}'";
    }
    
}
