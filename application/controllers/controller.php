<!-- <?php 


//function getPosts = (); 


?>
 -->
<?php

// REQUEST SQL TO GET ALL POSTS OF THE TABLE POSTS
include ("application/models/modelPosts.php");  

/*$posts = listPosts(0, 3)*/


function listPosts()
{
	var_dump("coucou"); die;
    $posts = getPosts(); // A REVOIR 

    require('postView.php');
}
/*
function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}*/

?>