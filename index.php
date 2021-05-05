<?php
require_once('includes/dbconnection.php');
require_once('includes/querys.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЕЛЕКТРОННО ЗАЯВЛЕНИЕ </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div>
                    <div>
                        <img src="assets/logo.png"><br>
                    </div>
                    <div>
                        <div>
                            <h1>УНИВЕРСИТЕТ ПО БИБЛИОТЕКОЗНАНИЕ И<br>ИНФОРМАЦИОННИ ТЕХНОЛОГИИ </h1>
                            <h2>ЦЕНТЪР ЗА ДИСТАНЦИОННО ОБУЧЕНИЕ</h2>
                            <h3>ЕЛЕКТРОННО ЗАЯВЛЕНИЕ<br><span style="font-size: 16px;">за кандидатстване за обучение в ОКС Магистър</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <form action="submit.php" method="post">
            <label>Три имена<span> *</span></label><br>
                <input value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>" type="text" name="fname" id="fname" class="form-control" placeholder="Име">
                <input value="<?php echo isset($_POST['sname']) ? $_POST['sname'] : '' ?>" type="text" name="sname" id="sname" class="form-control" placeholder="Презиме">
                <input value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>"  type="text" name="lname" id="lname" class="form-control" placeholder="Фамилия"><br><br>
                <p><?php 
                    if(isset($name_error)){
                        echo $name_error;
                    }
                ?></p>
                    
            <label for="egn">ЕГН<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['egn']) ? $_POST['egn'] : '' ?>" name="egn" class="form-control">
                <p><?php 
                    if(isset($egn_error)){
                        echo $egn_error;
                    }
                ?></p>
            <label for="address">Постоянен адрес<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" name="address" class="form-control">
                <p><?php 
                    if(isset($address_error)){
                        echo $address_error;
                    }
                ?></p>
            <label for="email">Електронна поща<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" name="email" class="form-control">
                <p><?php 
                    if(isset($email_error)){
                        echo $email_error;
                    }
                ?></p>
            <label for="faculty">Факултет<span> *</span></label><br>
                <select  name="faculty" id="facultytxt" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options1->fetch_array()){
                                echo '<option value="'.$row['value'].'">'.$row['name'].'</option>';
                                }
                        ?>  
                    </select>
                    <script type="text/javascript">
                        document.getElementById('facultytxt').value = "<?php echo $_POST['faculty'];?>";
                    </script>
                    <p><?php 
                    if(isset($faculty_error)){
                        echo $faculty_error;
                    }?></p>
            <label for="status">Записан(а) за семестър<span> *</span></label><br>
                <select  name="status" id="statustxt" class="form-control">
                    <option value="" disabled selected> </option>
                        <?php
                            while($row = $options2->fetch_array()){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                }
                        ?>
                </select>
                <script type="text/javascript">
                    document.getElementById('statustxt').value = "<?php echo $_POST['status'];?>";
                </script>
                    <p><?php 
                    if(isset($status_error)){
                        echo $status_error;
                    }?></p>
            <label for="semester">Семестър<span> *</span></label><br>
                <select  name="semester" id="semestertxt" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options3->fetch_array()){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                }
                        ?>
                </select>
                <script type="text/javascript">
                    document.getElementById('semestertxt').value = "<?php echo $_POST['semester'];?>";
                </script>
                    <p><?php 
                    if(isset($semester_error)){
                        echo $semester_error;
                    }?></p>
            <label for="course">Курс<span> *</span></label><br>
                <select name="course" id="coursetxt" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options4->fetch_array()){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';    
                            }
                        ?>
                    </select>
                 <script type="text/javascript">
                    document.getElementById('coursetxt').value = "<?php echo $_POST['course'];?>";
                </script>
                    <p><?php 
                    if(isset($course_error)){
                        echo $course_error;
                    }?></p>
            <label for="oks">Образователно - квалификационна степен<span> *</span></label>
                <select name="oks" id="okstxt" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options5->fetch_array()){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                }
                        ?>
                    </select>
                <script type="text/javascript">
                    document.getElementById('okstxt').value = "<?php echo $_POST['oks'];?>";
                </script>
                    <p><?php 
                    if(isset($oks_error)){
                        echo $oks_error;
                    }?></p>
            <label for="specialty">Специалност<span> *</span></label><br>
                <select name="specialty" id="specialtytxt" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options6->fetch_array()){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                }
                        ?>
                </select>
                <script type="text/javascript">
                    document.getElementById('specialtytxt').value = "<?php echo $_POST['specialty'];?>";
                </script>
                    <p><?php 
                    if(isset($specialty_error)){
                        echo $specialty_error;
                    }?></p>
            <label for="facnum">Факултетен номер<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['facnum']) ? $_POST['facnum'] : '' ?>" name="facnum" class="form-control">
                    <p><?php 
                    if(isset($facnum_error)){
                        echo $facnum_error;
                    }?></p>
            <label for="because">Настоящето се издава в уверение на това, че</label>
                <textarea name="because" class="form-control"><?php echo isset($_POST['because']) ? $_POST['because'] : '' ?></textarea><br>

            <label for="for">Уверението се дава за да послужи пред<span> *</span></label>
                <textarea name="for" class="form-control"><?php echo isset($_POST['for']) ? $_POST['for'] : '' ?></textarea>
                <p><?php 
                    if(isset($for_error)){
                        echo $for_error;
                    }?></p>
            <input class="btn btn-light submit" type="submit" value="Преглед">
        </form>
    </div>
    <footer>
        <p>Copyright © 2020-2020 Компютърна лаборатория Джон Атанасов All Rights Reserved.</p>
    </footer>
</body>
</html>