<?php
/*
*	
*	MPP translator
*	By Reda Souadi
*
*/

$retour = '<br />';
$form_mpp = '';
$icone_mpp='';
$icone_clan='';
$form_clan='style="display: none;"';

function lgafonction($a,$b,$c){
	if (array_key_exists($a, $b)){
		$d = $b[$a];
		return $d;
	}else{
		return $c;
	}
}

$b =  array('dir' => 'do' ,
			'bda()' => 'main()' ,
			'WALOU' => '0' ,
			'sa7i7' => '1' ,
			'khata2' => '-1' ,
			'stn3as()' => 'sleep()' ,
			'w7al()' => 'fopen()' ,
			'rje3' => 'return' ,
			'ra9m' => 'int' ,
			'_7arf' => 'char' ,
			'joumla' => 'char*' ,
			'_3achari' => 'float' ,
			'_7a9i9i' => 'double' ,
			'ra9m tabitr' => 'const' ,
			'_7arf tabit_7' => 'const' ,
			'war9a' => 'FILE' ,
			'khawi' => 'void' ,
			'ila' => 'if' ,
			'oula' => 'else' ,
			'_7awal' => 'switch' ,
			'mra' => 'case' ,
			'_7ta' => 'while' ,
			'ktab()' => 'printf()' ,
			'_9ra()' => 'scanf()' ,
			'wktab()' => 'fprintf()' ,
			'f3al()' => 'system()' ,
			'error' => '' ,
	 );

$y = array('do' => 'dir' ,
			'main()' => 'bda()' ,
			'0' => 'WALOU' ,
			'1' => 'sa7i7' ,
			'-1' => 'khata2' ,
			'sleep()' => 'stn3as()' ,
			'fopen()' => 'w7al()' ,
			'return' => 'rje3' ,
			'int' => 'ra9m' ,
			'char' => '_7arf' ,
			'char*' => 'joumla' ,
			'float' => '_3achari' ,
			'double' => '_7a9i9i' ,
			'const' => 'ra9m tabitr' ,
			'const' => '_7arf tabit_7' ,
			'FILE' => 'wr9a' ,
			'void' => 'khawi' ,
			'if' => 'ila' ,
			'else' => 'oula' ,
			'switch()' => '_7awal()' ,
			'case' => 'mra' ,
			'while()' => '_7ta()' ,
			'printf()' => 'ktab()' ,
			'scanf()' => '_9ra()' ,
			'fprintf()' => 'wktab()' ,
			'system()' => 'f3al()' ,
			'error' => '' ,
	 );

$c = 'fonction makaynach f MPP !';
$z = 'fonction makaynach f C !';
if (isset($_POST['mpp'])) {
	$a = $_POST['mpp'];
}else{
	$a = 'error';
}


if (isset($_POST['clan'])) {
	$x = $_POST['clan'];
}else{
	$x = 'error';
}

$clan = lgafonction($a,$b,$c);
$mpp = lgafonction($x,$y,$z);

if ($mpp=='') {
	$form_mpp=$form_mpp;
	$icone_mpp=$icone_mpp;
}else{
	$form_mpp='style="display: none;"';
	$icone_mpp='style="background-image: url(images/todo/todo.png); background-color: rgb(52, 73, 94); background-position: 92% 50%; background-repeat: no-repeat no-repeat;"';
	$icone_clan='style="background-image: url(images/todo/done.png); background-color: rgb(52, 73, 94); background-position: 92% 50%; background-repeat: no-repeat no-repeat;"';
	$form_clan='';
}

?>
<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    	<link href="css/flat-ui.css" rel="stylesheet">
    	<script src="js/jquery-1.8.3.min.js"></script>
    	<script src="js/script.js"></script>
	</head>
	<body>
		<div class="col-xs-4">
          <div class="todo" id="param">
            <div class="todo-search">
              <h5>
              	khtar les langages :
              </h5>
            </div>
            <ul>
			<li id="mpp-param" <?php echo $icone_mpp; ?> >
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                </div>
                  <h4 class="todo-name">
                    MPP to C
                  </h4>
                  t7awel fonction MPP l C
            </li>
              <li id="clan-param" <?php echo $icone_clan; ?> >
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    C to MPP
                  </h4>
                  t7awel fonction C l MPP
                </div>
              </li>
            </ul>
            <div class="todo" id="translator"><center>
        		<form action="index.php" method="post" id="mpp" <?php echo $form_mpp; ?> >
					<textarea name="mpp" id="text1" ></textarea>
		  			<input type="submit" value="translate to C" id="boutton1" >
    			</form>
    			<form action="index.php" method="post" id="clan" <?php echo $form_clan; ?> >
      				<textarea name="clan" id="text1" ></textarea>
      				<input type="submit" value="translate to C" id="boutton1" >
    			</form>
    			<?php 
    				if ($mpp != '' && $mpp != $z) {
    					echo '<div class="form-group has-success" id="translation" >' ;
    					echo '<input type="text" value="'.$mpp.'" class="form-control">' ;
    					echo '<span class="input-icon fui-check-inverted"></span>' ;
    					echo '</div>';
    				}elseif ($mpp == $z) {
    					echo '<div class="form-group has-error" id="translation" >' ;
    					echo '<input type="text" value="'.$mpp.'" class="form-control">' ;
    					echo '</div>' ;
    				}elseif ($clan != '' && $clan != $c) {
    					echo '<div class="form-group has-success" id="translation" >' ;
    					echo '<input type="text" value="'.$clan.'" class="form-control">' ;
    					echo '<span class="input-icon fui-check-inverted"></span>' ;
    					echo '</div>';
    				}elseif ($clan == $c) {
    					echo '<div class="form-group has-error" id="translation" >' ;
    					echo '<input type="text" value="'.$clan.'" class="form-control">' ;
    					echo '</div>' ;
    				}else{
    					echo '<div class="form-group" id="translation" >' ;
    					echo '<input type="text" value="disabled" disabled="disabled" class="form-control">' ;
    					echo '</div>';
    				}
    			 ?></center>
            </div>
          </div>
        </div>
	</body>
</html>
