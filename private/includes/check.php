<?php
        $fname = $_POST["fname"];
        $sname = $_POST["sname"];
        $lname = $_POST["lname"];
        $egn = $_POST["egn"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $facnum = $_POST["facnum"];
        $for = $_POST["for"];

        if(!isset($_POST['faculty']) )
        {
            $faculty = '';
        }else{
            $faculty = $_POST['faculty'];
        }

        if(!isset($_POST['status']) )
        {
            $status = '';
        }else{
            $status = $_POST['status'];
        }

        if(!isset($_POST['semester']) )
        {
            $semester = '';
        }else{
            $semester = $_POST['semester'];
        }

        if(!isset($_POST['course']) )
        {
            $course = '';
        }else{
            $course = $_POST['course'];
        }

        if(!isset($_POST['oks']) )
        {
            $oks = '';
        }else{
            $oks = $_POST['oks'];
        }

        if(!isset($_POST['specialty']) )
        {
            $specialty = '';
        }else{
            $specialty = $_POST['specialty'];
        }


        if(empty($fname && $sname && $lname)){ 
            $name_error = "<span style=\"color:red\">Въведете три имена</span>";
            $check = true;
        }

        if(empty($egn)){ 
            $egn_error = "<span style=\"color:red\">Въведете ЕГН</span>";
            $check = true;
        }
        elseif(strlen($egn) !== 10 || !is_numeric($egn)){
            $egn_error = "<span style=\"color:red\">Въведете валидно ЕГН</span>";
            $check = true;
        }

        if(strlen($address) < 10){ 
            $address_error = "<span style=\"color:red\">Въведете адрес</span>";
            $check = true;
        }

        if(empty($email)){ 
            $email_error = "<span style=\"color:red\">Въведете имейл адрес</span>";
            $check = true;
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "<span style=\"color:red\">Въведете валиден имейл адрес</span>";
            $check = true;
        }

        if($faculty == ''){
            $faculty_error = "<span style=\"color:red\">Изберете факултет</span>";
            $check = true;
        }
        
        if($status == ''){
            $status_error = "<span style=\"color:red\">Изберете статус</span>";
            $check = true;
        }

        if($semester == ''){
            $semester_error = "<span style=\"color:red\">Изберете семестър</span>";
            $check = true;
        }

        if($course == ''){
            $course_error = "<span style=\"color:red\">Изберете курс</span>";
            $check = true;
        }

        if($oks == ''){
            $oks_error = "<span style=\"color:red\">Изберете образователно - квалификационна степен</span>";
            $check = true;
        }

        if($specialty == ''){
            $specialty_error = "<span style=\"color:red\">Изберете специалност</span>";
            $check = true;
        }

        if($facnum == ''){
            $facnum_error = "<span style=\"color:red\">Изберете специалност</span>";
            $check = true;
        }/*elseif(!preg_match("/^[a-zA-Z\p{Cyrillic}\d\s\-0-9-]+$/", $facnum)){
            echo "yessss";
        }*/

        if($for == ''){
            $for_error = "<span style=\"color:red\">Въведете за какво / къде ще послужи уверението.</span>";
            $check = true;
        } 
    ?>