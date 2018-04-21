<html>
<head>
<title>
	tes filled dropdown with database 
</title>
</head>
<body>

<select id="test" name="test">
<option class="tes" >tee</option>
</select>

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$.ajax({
		type : "POST",
		url : "combobox.php",
		success: function(data){
			$("#test").html(data);
		}
	});

</script>
</body>
</html>