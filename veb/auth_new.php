<?php      
               

                $flower = parse_ini_file("../password.ini");
          
                  $log = "pgsql:host=" .  $flower['host'];
                  $lag = "dbname=" . $flower['dbname'];
                  $lug = $flower['username'];
                  $leg = $flower['password'];
                
                
                $conn = new PDO("$log; $lag","$lug","$leg");

                $name = $_POST['user_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone_number'];
                $pass = $_POST['password'];
                $checkPass = $_POST['checkPass'];
              
                $request = $conn->prepare('SELECT * FROM поьзователь WHERE email = ?;');
                $request->bindParam(1, $email, PDO::PARAM_STR);
                $request->execute();
                $i = 0;
                while($result = $request->fetch(PDO::FETCH_ASSOC)){
                  $i = $i + 1;
                }
                if($i != 0){
                  echo 'User is already exist';
                  $conn = null;
                  die();
                }
                else{

                $addReguest = $conn->prepare('INSERT INTO пользователь (user_name, email, phone_number, password) VALUES (?, ?, ?, ?);');
           
                $addReguest->bindParam(1, $name, PDO::PARAM_STR);
                $addReguest->bindParam(2, $email, PDO::PARAM_STR);
                $addReguest->bindParam(3, $phone, PDO::PARAM_STR);
                $addReguest->bindParam(4, $pass, PDO::PARAM_STR);
                $addReguest->execute();

                $conn = null;

                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                echo $_SESSION['name'];
                echo $_SESSION['email'];

              }
              ?>
              