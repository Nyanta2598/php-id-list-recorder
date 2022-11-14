<?php 
    //Note Checker
    function checker($student) 
    {
        if($student == 1)
        {
            echo "checked";
        } 
        else 
        {
            echo "Error Checker";
        }
    }

    //Checking Receiving
    function receiver($student) 
    {
        if($student == 0)
        {
            echo "Not Receive";
        }
        elseif($student == 1)
        {
            echo "Received";
        } 
        else 
        {
            echo "Error Receiving";
        }
    }
    //Checking Receiving
    function year($student) {
        if($student == '1ST')
        {
            echo "1st Year";
        }
        elseif($student == '2ND')
        {
            echo "2nd Year";
        }
        elseif($student == '3RD')
        {
            echo "3rd Year";
        }
        elseif($student == '4TH')
        {
            echo "4th Year";
        }
        else 
        {
            echo "Error Year";
        }
    }

    function course($student) {
        if($student == 'BEED GENERALIST')
        {
            echo "Bachelor of Elementary Education";
        }
        elseif($student == 'BSED ENGLISH')
        {
            echo "Bachelor of Secondary Education English";
        }
        elseif($student == 'BSED FILIPINO')
        {
            echo "Bachelor of Secondary Education Filipino";
        }
        elseif($student == 'BSED MATH')
        {
            echo "Bachelor of Secondary Education MATH";
        }
        elseif($student == 'BSCRIM')
        {
            echo "Bachelor of Science in Criminology";
        }
        elseif($student == 'BSPSYCH')
        {
            echo "Bachelor of Science in Psychology";
        }
        elseif($student == 'BPED')
        {
            echo "Bachelor of Physical Education";
        }
        elseif($student == 'BSIAS')
        {
            echo "Bachelor of Science in Accounting Information System";
        }
        elseif($student == 'BSBA MM')
        {
            echo "Bachelor of Science in Business Administration Major in Marketing Management";
        }
        elseif($student == 'BSTH')
        {
            echo "Bachelor of Science in Tourism Management";
        }
        elseif($student == 'BSHM')
        {
            echo "Bachelor of Science in Hospitality Management";
        }
        elseif($student == 'BSIT')
        {
            echo "Bachelor of Science in Information Technology";
        }
        else 
        {
            echo "Error Year";
        }
    }
?>