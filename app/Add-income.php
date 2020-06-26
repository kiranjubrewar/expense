<!DOCTYPE html>
<html>
	<head>
		<title>Grabbing Form Data to Display on Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<style>

			body{ height: 680px; margin: 20px; padding: 10px; border: 2px solid #033371; border-radius: 15px; -moz-border-radius: 15px; -webkit-border-radius: 15px;}
			p { display: table-row;}
			label { margin-right: 40px; display: table-cell; width: 120px; }
        		input { margin-bottom: 5px; display: table-cell; padding:5px; border:1px solid #999;border-radius:4px; -moz-border-radius:4px;-web-kit-border-radius:4px;-khtml-border-radius:4px;
            		}
			button{ background-color: #bde2f9; font-weight: 600;}
			table, th { border: 1px solid black;}
			td{font-weight:heavy; width:160px; color:red; text-align: center;}

	

		</style>
		<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
		<!--<script type="text/javascript">
			 
		tinymce.init({
            			selector: "#newcom",
            			auto_focus: "newcom",
            			skin: "xenmce",
            			width: 750,
            			height: 250,
            			plugins: [
                 			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                 			"save table contextmenu directionality emoticons template paste textcolor "
           			],
           			content_css: "css/content.css",
           			toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor", 
           			style_formats: [
                			{title: 'Bold text', inline: 'b'},
                			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                			{title: 'Example 1', inline: 'span', classes: 'example1'},
                			{title: 'Example 2', inline: 'span', classes: 'example2'},
                			{title: 'Table styles'},
                			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            			]
         		});
		</script> -->
		
</head>
<body>
<div class="row justify-content-center" >	
	<form action="addincome.php" name="firstform" id="firstform" method="post">
	<div class="form-group">
			<p id="p1">
				<label>Amount</label>
				   <input type="text" name="Amount" class="form-control" id="Amount" size="35" value="" />
			</p>
			</div>
			<div class="form-group">

			<p id="p2">
				<label>Date</label>
				   <input type="Date" name="Date" class="form-control" id="Date" size="35" value="" />
			</p>
			</div>
			<div class="form-group">

			<p id="p3">
				<label>Time</label>
				   <input type="Time" name="Time" class="form-control" id="Time" size="35" value="" />
			</p>
			</div>
			<div class="form-group">

			<p id="p4">
              <label>Money</label>

               <select id="Money" class="form-control" name="Money">
                  <option value="Cash" selected>Cash</option>
                  <option value="Net Banking">Net Banking</option>
                  <option value="Credit Card">Credit Card</option>
                  <option value="Debit Card">Debit Card</option>

               </select>
			</p>
			</div>
			<div class="form-group">

			<p id="p5">
				<label>Comments</label>
				<textarea name="Comment" class="form-control" value='Comment' cols="37" rows="10" id="Comment"></textarea>
			</p><br />
			</div>
			<div class="form-group">


			<p id="p5">
				<label>Work</label>
				<select id="Work" class="form-control" name="Work">
					<option value="Salary" selected>Salary</option>
					<option value="Business">Business</option>
					<option value="Lone">Lone</option>
				</select>
			</p><br>
			</div>
			<div class="form-group">

			<input type="submit" class="btn btn-primary" name="save" value="submit">
			</div>
	</form>
</div>			
		
</body>
</html>