<html lang="en">
 <head>
   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
		 <script src="scripts/jquery.min.js" type="text/javascript"></script>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="scripts/bootstrap.min.js" type="text/javascript"></script>

 </head>
<body>
 <br></br>
	<div class="container">
		 <br />	 
		 <h2 align ="center">CREATE, UPDATE AND DELETE STUDENT</h2>
		 <br />
		<div class="table-responsive">
			 <table class="table table-bordered" id="crud_table">
			 <tr>
				<th width="5%">REGNUM</th>
				<th width="20%">Name</th>
				<th width="20%">Surname</th>
				<th width="20%">Address</th>
				<th width="10%">Gender</th>
				<th width="25%">Next of Kin</th>
				<th width="20%">Occupation</th>
				<th width="20%">Phone Number</th>
				<th width="20%">Date Registered</th>
				<th width="20%">Email</th>
				<th width="20%">Designation</th>
			 
			 </tr>
			 <tr>
				<td contentEditable="true" class="item_regnum"></td>
				<td contentEditable="true" class="item_name"></td>
				<td contentEditable="true" class="item_surname"></td>
				<td contentEditable="true" class="item_address"></td>
				<td contentEditable="true" class="item_gender"></td>
				<td contentEditable="true" class="item_nok"></td>
				<td contentEditable="true" class="item_occ"></td>
				<td contentEditable="true" class="item_phone"></td>
				<td contentEditable="true" class="item_date"></td>
				<td contentEditable="true" class="item_email"></td>
				<td contentEditable="true" class="item_des"></td>
			 
			 </tr>
			 </table>
			 <div align="right">
				<button type="button" name="add" id="add" class="btn btn-success">+</button>
			 </div >
			 <div align="center">
				<button type="button" name="save" id="save" class="btn btn-info">SAVE</button>
			</div>
			<div id="insert_data"></div>
		 </div>
	</div>
  </body>
 </html>
	<script>
		$(document).ready(function()
{
			var count = 1;
			$('#add').click(function()
			{
				count = count + 1;
				var html_code = "<tr id = 'row"+count+"'>";
				html_code += "<td contentEditable='true' class='item_regnum'></td>";
				html_code += "<td contentEditable='true' class='item_name'></td>";
				html_code += "<td contentEditable='true' class='item_surname'></td>";
				html_code += "<td contentEditable='true' class='item_address'></td>";
				html_code += "<td contentEditable='true' class='item_gender'></td>";
				html_code += "<td contentEditable='true' class='item_nok'></td>";
				html_code += "<td contentEditable='true' class='item_occ'></td>";
				html_code += "<td contentEditable='true' class='item_phone'></td>";		
				html_code += "<td contentEditable='true' class='item_date'></td>";
				html_code += "<td contentEditable='true' class='item_email'></td>";
				html_code += "<td contentEditable='true' class='item_des'></td>";
				html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
				html_code += "</tr>";
				$('#crud_table').append(html_code);
			});
				$(document).on('click','.remove',function(){
					var delete_row = $(this).data("row");
					$('#' + delete_row). remove();
				});
				$('#save').click(function()
				{
					var item_regnum =[];
					var item_name =[];
					var item_surname =[];
					var item_address=[];
					var item_gender =[];
					var item_nok =[];
					var item_occ =[];
					var item_phone =[];
					var item_date =[];
					var item_email =[];
					var item_des =[];
					
					$('.item_regnum').each(function(){
						item_regnum.push($(this).text());
					});
					$('.item_name').each(function(){
						item_name.push($(this).text());
					});
					$('.item_surname').each(function(){
						item_surname.push($(this).text());
					});
					$('.item_gender').each(function(){
						item_gender.push($(this).text());
					});
					$('.item_address').each(function(){
						item_gender.push($(this).text());
					});
					$('.item_nok').each(function(){
						item_nok.push($(this).text());
					});
					$('.item_occ').each(function(){
						item_occ.push($(this).text());
					});
					$('.item_phone').each(function(){
						item_phone.push($(this).text());
					});			
					$('.item_date').each(function(){
						item_nok.push($(this).text());
					});
					$('.item_email').each(function(){
						item_occ.push($(this).text());
					});
					$('.item_des').each(function(){
						item_phone.push($(this).text());
					});
					
					$.ajax({
						url:"insertds.php",
						method: "POST",
		data:{item_regnum:item_regnum, item_name:item_name, item_surname:item_surname, item_address:item_address,
		item_gender:item_gender, item_nok:item_nok, item_occ:item_occ, item_phone:item_phone, item_date:item_date, item_email:item_email, item_des:item_des},
						success:function(data)
						{
							$("td[contentEditable='true']").text("");
							for (var i = 2; i<=count; i++)
							{
								$('tr#'+i+'').remove();
							}
							fetch_item_data();
						}
					});
});
	function fetch_item_data()
	{
		$.ajax({
					url:"adminfunctions.php?action=view-edit",
					method: "POST",
					success:function(data)
					{
						$('#insert_item_data').html(data);	
					}
				})
	}
		fetch_item_data();	
});
</script>