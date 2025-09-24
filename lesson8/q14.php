<?php
    $name="Mark";
    class StudentDetails {
        function studentName() {
            echo $name;
        }
    }

    echo 'Hello Student';
    $sd=new StudentDetails();
    $sd->studentName();
?>