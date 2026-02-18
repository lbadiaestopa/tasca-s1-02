<?php

    function studentGrade($grade) {
        if ($grade < 0 || $grade > 100) {
            return "Error: Grade must be between 0 and 100";
        }

        if ($grade >= 60) {
            return "First Division";
        } else if ($grade >= 45) {
            return "Second Division";
        } else if ($grade >= 33) {
            return "Third Division";
        } else {
            return "Failed";
        }
    }

?>