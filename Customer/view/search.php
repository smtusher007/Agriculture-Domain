<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://use.fontawesome.com/0f09624171.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<div class="form-group">
				<div class="input-group">

					<span class="input-group-addon"><i class="fa fa-search"></i> Search</span>

					<input type="text" name="search_text" id="search_text" placeholder="Search by Vegetable Name" class="form-control" />
					
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../control/search-control.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>