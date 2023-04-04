<?php


$students = [
    //  ['name' => 'Nme', 'email' => 'E-mail', 'status' => 'Status'],
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
// print_r ($students);



echo '<h1> Application name : PHP class registeration </h1>';
echo "<table> <th>Name </th> <th>Email </th> <th>Status </th> ";


function color($students = array()){    foreach ($students as $row) {

                    

    echo '<tr>';
        $style = $row["status"] == 'CMS' ? 'style ="color:red"': '' ;

        echo"<td $style>{$row['name']}</td>";
        echo"<td $style>{$row['email']}</td>";
        echo"<td $style>{$row['status']}</td>";
        echo '<tr>';
   
    }
    

}   

    color($students);