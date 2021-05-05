        <form action="" method="post">
            <label>Три имена<span> *</span></label><br>
                <input value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>" type="text" name="fname" id="fname" class="form-control" placeholder="Име">
                <input value="<?php echo isset($_POST['sname']) ? $_POST['sname'] : '' ?>" type="text" name="sname" id="sname" class="form-control" placeholder="Презиме">
                <input value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>"  type="text" name="lname" id="lname" class="form-control" placeholder="Фамилия"><br><br>
                <p><?php if(isset($name_error)){ echo $name_error; } ?></p>
                    
            <label for="egn">ЕГН<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['egn']) ? $_POST['egn'] : '' ?>" name="egn" class="form-control">
                    <p><?php if(isset($egn_error)){ echo $egn_error; }?></p>

            <label for="address">Постоянен адрес<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" name="address" class="form-control">
                    <p><?php if(isset($address_error)){ echo $address_error; } ?></p>

            <label for="email">Електронна поща<span> *</span></label><br>
                <input type="text" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" name="email" class="form-control">
                    <p><?php if(isset($email_error)){ echo $email_error; } ?></p>

            <label for="faculty">Факултет<span> *</span></label><br>
                <select  name="faculty" id="faculty" class="form-control">
                    <option value="" disabled selected> </option>
                        <?php
                            while($row = $options1->fetch_array()){
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                }
                        ?>  
                    </select>
                    <script type="text/javascript">
                        document.getElementById('faculty').value = "<?php echo $_POST['faculty'];?>";
                    </script>
                        <p><?php 
                            if(isset($faculty_error)){
                            echo $faculty_error;
                        }?></p>
            <label for="status">Записан(а) за семестър<span> *</span></label><br>
                <select  name="status" id="status" class="form-control">
                    <option value="" disabled selected> </option>
                        <?php
                            while($row = $options2->fetch_array()){
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                }
                        ?>
                </select>
                <script type="text/javascript">
                    document.getElementById('status').value = "<?php echo $_POST['status'];?>";
                </script>
                        <p><?php 
                            if(isset($status_error)){
                            echo $status_error;
                        }?></p>
            <label for="semester">Семестър<span> *</span></label><br>
                <select  name="semester" id="semester" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options3->fetch_array()){
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                }
                        ?>
                </select>
                <script type="text/javascript">
                    document.getElementById('semester').value = "<?php echo $_POST['semester'];?>";
                </script>
                        <p><?php 
                            if(isset($semester_error)){
                            echo $semester_error;
                        }?></p>
            <label for="course">Курс<span> *</span></label><br>
                <select name="course" id="course" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options4->fetch_array()){
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';    
                            }
                        ?>
                    </select>
                 <script type="text/javascript">
                    document.getElementById('course').value = "<?php echo $_POST['course'];?>";
                </script>
                        <p><?php 
                            if(isset($course_error)){
                            echo $course_error;
                        }?></p>
            <label for="oks">Образователно - квалификационна степен<span> *</span></label>
                <select name="oks" id="oks" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options5->fetch_array()){
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                }
                        ?>
                    </select>
                <script type="text/javascript">
                    document.getElementById('oks').value = "<?php echo $_POST['oks'];?>";
                </script>
                        <p><?php 
                            if(isset($oks_error)){
                            echo $oks_error;
                        }?></p>
            <label for="specialty">Специалност<span> *</span></label><br>
                <select name="specialty" id="specialty" class="form-control">
                    <option value="" disabled selected></option>
                        <?php
                            while($row = $options6->fetch_array()){
                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                }
                        ?>
                </select>
                <script type="text/javascript">
                    document.getElementById('specialty').value = "<?php echo $_POST['specialty'];?>";
                </script>
                        <p><?php 
                            if(isset($specialty_error)){
                            echo $specialty_error;
                        }?></p>
            <label for="facnum">Факултетен номер<span> *</span></label><br>
                <input type="text" name="facnum" id="facnum" class="form-control">
                <script type="text/javascript">
                    document.getElementById('facnum').value = "<?php echo $_POST['facnum'];?>";
                </script>
                        <p><?php 
                            if(isset($facnum_error)){
                            echo $facnum_error;
                        }?></p>
            <label for="for">Уверението се дава за да послужи пред<span> *</span></label>
                <textarea name="for" id="for" class="form-control"></textarea>
                <script type="text/javascript">
                    document.getElementById('for').value = "<?php echo $_POST['for'];?>";
                </script>
                        <p><?php 
                            if(isset($for_error)){
                            echo $for_error;
                        }?></p>
            <input class="btn btn-light submit" type="submit" value="Преглед">
            
        </form>
    </div>