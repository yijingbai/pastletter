<?

//1、实例化DbBak需要告诉它两件事：数据服务器在哪里($connectid)、备份到哪个目录($backupDir)： 
require_once('backup_class.php');   

$connectid = mysql_connect('localhost','root','');    
$backupDir = './data';    

$DbBak = new DbBak($connectid,$backupDir);  

$DbBak->backupDb('pastletter');  

//2.2如果你只想备份test库中的admin 、test表，可以用一个一维数组指定：
//$DbBak->backupDb('test',array('admin','test')); 

//2.3如果只想备份一个表，比如admin表：
//$DbBak->backupDb('test','admin'); 
   
//数据恢复：
//对于2.1、2.1、2.3三种情况，只要相应的修改下语句，把backupDb换成restoreDb就能实现数据恢复了：
//$DbBak->restoreDb('test');  

//SQL代码
//$DbBak->restoreDb('test',array('admin','test')); 

//PHP代码
//$DbBak->restoreDb('test','admin');  

?>