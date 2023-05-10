<?php

$flower = parse_ini_file("../password.ini");
          
$log = "pgsql:host=" .  $flower['host'];
$lag = "dbname=" . $flower['dbname'];
$lug = $flower['username'];
$leg = $flower['password'];


$conn = new PDO("$log; $lag","$lug","$leg");

  
                  $film_name = $_POST['film_name'];
                  $description = $_POST['description'];
                  $year = $_POST['year'];
                 $start="\image\\";
                 //$name = $_FILES['image']['name'];
                  //$file_name = $start.$name;
                
	               

                $path = 'image/'; // директория для загрузки
                $ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
                $new_name = time().'.'.$ext; // новое имя с расширением

                $full_path = $path.$new_name; // полный путь с новым именем и расширением
                $right_full_path=$start.$new_name;

if($_FILES['image']['error'] == 0){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $full_path)){
      $addReguest = $conn->prepare('INSERT INTO обзор (film_name, description, image_link, year) VALUES (?, ?, ?, ?);');
      $addReguest->bindParam(1, $film_name, PDO::PARAM_STR);
      $addReguest->bindParam(2, $description, PDO::PARAM_STR);
      $addReguest->bindParam(3,  $right_full_path, PDO::PARAM_STR);
      $addReguest->bindParam(4,  $year, PDO::PARAM_STR);
      $addReguest->execute();
    }
}
            
				
           header('Location: /');
           exit();
?>
