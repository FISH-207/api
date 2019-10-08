<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>API View</title>
</head>
<body>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
  <script type="text/javascript">
  	$(document).ready(function (){
  		$.ajax({
  			url:"<?php echo base_url();?>testing/index",
  			method="POST",
  			data:{
  				data_action:'fetch_all'
  			},
  			success:function(data){
  				$('tbody').html(data);
  			}
  			fetch_data();
  		});
  	});
  </script>
</body>
</html>