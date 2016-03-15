<?php
echo "hello world";

//一些数据库基本操作

$myconn = mysql_connect("localhost","root","");

if(!$myconn){
	die("not connect");
}
//创建数据库
$result = mysql_query("create database yang ",$myconn);
var_dump($result);
if($result){
	echo "create database success!";
} else {
	echo "error creating database".mysql_error();
}
mysql_close($myconn);



$myconn = mysql_connect("localhost","root","");
//创建数据库表
mysql_select_db("yang",$myconn);
$sql = "create table users(
name varchar(20),
age int(4),
addr varchar(100)
)";

$result = mysql_query($sql,$myconn);
var_dump($result);

if($result){
	echo "create table users success!";
} else {
	echo "error creating table users".mysql_error();
}



//mysql alter table
mysql_select_db("yang",$myconn);
$sql2 = "ALTER TABLE `users`
ADD COLUMN `id`  int(10) NULL AUTO_INCREMENT FIRST ,
ADD PRIMARY KEY (`id`);";

$result = mysql_query($sql2,$myconn);
if($result){
	echo "alter table users success!";
} else {
	echo "alter table users".mysql_error();
}


mysql_select_db("yang",$myconn);
$result = mysql_query("insert into users(name,age,addr) values('aa',20,'北京')");
$result = mysql_query("insert into users(name,age,addr) values('bb',10,'北京')");
$result = mysql_query("insert into users(name,age,addr) values('cc',20,'北京')");
if($result){
	echo "insert table users success!";
} else {
	echo "insert table users".mysql_error();
}

mysql_close($myconn);


?>