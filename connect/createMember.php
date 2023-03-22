<?php
    include "index.php";

    $sql = "create table member(";
    $sql .= "memberID int(10) unsigned auto_increment,";
    $sql .= "youEmail varchar(40) NOT NULL,";
    $sql .= "youName varchar(10) NOT NULL,";
    $sql .= "youPass varchar(20) NOT NULL,";
    $sql .= "youBirth int(10) NOT NULL,";
    $sql .= "youAge int(5) NOT NULL,";
    $sql .= "regTime int(30) NOT NULL,";
    $sql .= "PRIMARY KEY(memberID)";
    $sql .= ") charset=utf8;";

    $result = $connect -> query($sql);
    
    if($result){
        echo "Create Tables Complete";
    } else {
        echo "Create Tables False";
    };
?>