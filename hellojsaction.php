<?php

if($_SERVER['REQUEST_METHOD']==="POST")
{
	if(empty($_POST['firstname']))
	{
		echo "<h1> style='color:red'>Field empty</h1>";
	}
	else
	{
		echo "<h1> Welcone,".$_POST['firstname']."</h1>";
	}
}




?>