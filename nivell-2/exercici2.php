<?php

    function validateScores($score1, $score2, $score3) {
        if (
            $score1 < 0 || $score1 > 9999 ||
            $score2 < 0 || $score2 > 9999 ||
            $score3 < 0 || $score3 > 9999
        ) {
            throw new Exception('Scores must be between 0 and 9999');
        }
    }

    function scoreSum($score1, $score2, $score3) {
        validateScores($score1, $score2, $score3);
        return $score1 + $score2 + $score3;
    }

    function scoreAverage($score1, $score2, $score3) {
        validateScores($score1, $score2, $score3);
        return scoreSum($score1, $score2, $score3) / 3;
    }

    function scoreClassification($score1, $score2, $score3) {
        validateScores($score1, $score2, $score3);

        $average = scoreAverage($score1, $score2, $score3);

        if ($average < 4000) {
            return 'Beginner';
        } elseif ($average < 8000) {
            return 'rmediate';
        } else {
            return 'Professional';
        }
    }

?>