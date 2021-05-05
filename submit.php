    <?php
        $fname = $_POST["fname"];
        $sname = $_POST["sname"];
        $lname = $_POST["lname"];
        $egn = $_POST["egn"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $faculty = $_POST["faculty"];
        $status = $_POST["status"];
        $semester = $_POST["semester"];
        $course = $_POST["course"];
        $oks = $_POST["oks"];
        $specialty = $_POST["specialty"];
        $facnum = $_POST["facnum"];
        $because = $_POST["because"];
        $for = $_POST["for"];

        $check = 0;

        if(empty($fname && $sname && $lname)){ 
            $name_error = "<span style=\"color:red\">Въведете три имена</span>";
            $check = 1;
        }

        if(empty($egn)){ 
            $egn_error = "<span style=\"color:red\">Въведете ЕГН</span>";
            $check = 1;
        }
        elseif(strlen($egn) !== 10 || !is_numeric($egn)){
            $egn_error = "<span style=\"color:red\">Въведете валидно ЕГН</span>";
            $check = 1;
        }

        if(strlen($address) < 10){ 
            $address_error = "<span style=\"color:red\">Въведете адрес</span>";
            $check = 1;
        }

        if(empty($email)){ 
            $email_error = "<span style=\"color:red\">Въведете имейл адрес</span>";
            $check = 1;
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "<span style=\"color:red\">Въведете валиден имейл адрес</span>";
            $check = 1;
        }

        if($faculty == ''){
            $faculty_error = "<span style=\"color:red\">Изберете факултет</span>";
            $check = 1;
        }

        if($status == ''){
            $status_error = "<span style=\"color:red\">Изберете статус</span>";
            $check = 1;
        }

        if($semester == ''){
            $semester_error = "<span style=\"color:red\">Изберете семестър</span>";
            $check = 1;
        }

        if($course == ''){
            $course_error = "<span style=\"color:red\">Изберете курс</span>";
            $check = 1;
        }

        if($oks == ''){
            $oks_error = "<span style=\"color:red\">Изберете образователно - квалификационна степен</span>";
            $check = 1;
        }

        if($specialty == ''){
            $specialty_error = "<span style=\"color:red\">Изберете специалност</span>";
            $check = 1;
        }

        if(empty($facnum)){
            $facnum_error = "<span style=\"color:red\">Въведете факултетен номер</span>";
            $check = 1;
        }
        if(empty($for)){
            $for_error = "<span style=\"color:red\">Въведете къде ще послужи уверението.</span>";
            $check = 1;
        }
        
        if($check == 0){
            include('preview.php');
        }
        else{
            include('index.php');
        }
    ?>