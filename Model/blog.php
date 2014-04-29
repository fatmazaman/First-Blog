<?php 
 if(!function_exists('open')){
        include ('dbcon.php');
    }
function insertdata($name,$title,$blog){
	$db=open();
	$db->query("INSERT INTO blog (name,title,blog)
		values('$name','$title','$blog')");
	if(!$db){
		echo $db->error;
	}
	
}

function selectdata(){
	$db=open();
	$sql=$db->prepare('SELECT * FROM blog');
        $sql->execute();
        $sql->bind_result($id,$name,$title,$blog);
        while($sql->fetch()){
               
        $blogs[]=array('name'=>$name,'title'=>$title,'blog'=>$blog);
        }
        
        return ($blogs); 	
}


?>