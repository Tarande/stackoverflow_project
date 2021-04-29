<?php
if ($_POST)
{
	include 'bbcode.php';
	
	//parses posted BBcode to HTML
	$html_code	= bbcode::tohtml($_POST['description'],TRUE);
	
	//removes the bbcode
	$nobbcode	= bbcode::remove($_POST['description']);	
}
?>

<!doctype html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>bbcode example</title>
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]> <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]-->
<link rel="stylesheet" href="http://sceditor.samclarke.com/minified/jquery.sceditor.min.css" type="text/css" media="all" />
</head>

<body>
	<div style="margin:0 auto 0 auto;width:900px;">
	
	<h1>PHP BBcode parser.</h1>
	
	<form action="" method="post">
		<textarea name="description" id="description" style="width: 100%; height: 400px"><?=$_POST['description']?></textarea>
		<input type="submit" value="Convert to HTML" />
	</form>

	
	<?if($_POST):?>
		<h4>Parsed HTML</h4>
		<?php=$html_code?>
		<h4>HTML source code</h4>
		<textarea style="width: 100%; height: 100px"><?php=$html_code?></textarea>
		<h4>Posted BBcode</h4>
		<textarea style="width: 100%; height: 100px"><?php=$_POST['description']?></textarea>
		<h4>Remove BBcode</h4>
		<textarea style="width: 100%; height: 100px"><?php=$nobbcode?></textarea>
	<?endif?>
	
	<p>This example uses the super nice WYSIWYG JQuery BBcode <a href="https://github.com/samclarke/SCEditor">SCEditor</a></p>
	
	</div>
	
	<script type="text/javascript"	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript"	src="http://sceditor.samclarke.com/minified/jquery.sceditor.min.js"></script>
	<script>
	$(function(){
		
		$('textarea[name=description]').sceditorBBCodePlugin({
			toolbar: "bold,italic,underline,strike,|left,center,right,justify|" +
			"size,color,removeformat|bulletlist,orderedlist|email,link,unlink,youtube|source",
			resizeEnabled: "true"
		});
	});
	</script>
</body>
</html>