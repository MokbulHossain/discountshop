<?php
include 'config/connection.php';
function execute_query_part($location,$shop_name,$category){
	$conditional_part='';
	if ($location) {
		$conditional_part=" where client_info.location like '%".$location."%'";
	}
	if ($shop_name) {
		$conditional_part=" where client_info.shopname like '%".$shop_name."%'";
	}
	if ($category) {
		$conditional_part=" where post_info.category like '%".$category."%'";
	}
	$query="select count(post_info.post_id) from post_info inner join client_info on post_info.client_email=client_info.email ".$conditional_part ;
    $result=mysqli_query($GLOBALS['con'],$query);
	$row = mysqli_fetch_row($result);
 
	$rows = $row[0];
 
	$page_rows = 9;
 global $last;
  $last = ceil($rows/$page_rows);
 
	if($last < 1){
		$last = 1;
	}
 
	global $pagenum;$pagenum = 1;
 
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}
     global $limit;
	 $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
    global $nquery;
	$queryforselect="select * from post_info inner join client_info on post_info.client_email=client_info.email ".$conditional_part." $limit" ;
	$nquery=mysqli_query($GLOBALS['con'],$queryforselect);
	}
 function page_control($last,$pagenum){
    global $paginationCtrls;
	$paginationCtrls = '';
	if( $last != 1){
 
	if ($pagenum > 1) {
		global $previous;
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
    	global $next;
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Next</a> ';
    }
	}
}



if ($ab || $shop_name || $location || $category ) {
		execute_query_part($location,$shop_name,$category);
		page_control($last,$pagenum);
	}

 ?>