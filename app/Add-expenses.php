<!DOCTYPE html>
<html>
	<head>
		<title>Grabbing Form Data to Display on Page</title>
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
			
	<form action="addexpenses.php" name="firstform" id="firstform" method="post">
		<p id="p1">
			<label>Amount</label>
			    <input type="text" name="Amount" id="Amount" size="35" value="" />
		</p>
		<p id="p2">
			<label>Date</label>
			    <input type="Date" name="Date" id="Date" size="35" value="" />
		</p>
		<p id="p3">
			<label>Time</label>
			    <input type="Time" name="Time" id="Time" size="35" value="" />
		</p>
		<p id="p4">
            <label>Money</label>
            <select id="Money" name="Money">
                <option  value="Cash" selected>Cash</option>
                <option  value="Net Banking">Net Banking</option>
                <option  value="Credit Card">Credit Card</option>
                <option  value="Debit Card">Debit Card</option>

            </select>
		</p>
		<p id="p5">
			<label>Comments</label><textarea name="Comment" value='Comment' cols="37" rows="10" id="Comment"></textarea>
		</p><br />
		<p id="p4">
            <label>category</label>
            <select id="category" name="category">
                <option  value="Study" selected>Study</option>
                <option  value="Food">Food</option>
                <option  value="Fuel">Fuel</option>
                <option  value="Restarent">Restarent</option>
                <option  value="Medical">Medical</option>
                <option  value="Agriculture">Agriculture</option>
                <option  value="Shopping">Shopping</option>
                <option  value="Other">Other</option>

            </select>
		</p>
		<input type="submit" name="save" value="submit">
	</form>
			
		<!--<div id="pdada">
			<table border="1">
				<tr>
					<th>Amount</td>
					<th>DATE</td>
					<th>Time</th>
          <th>Discription</td>
          <th>Type</th>  
				</tr>
				<tr>
					<td id="Amoun"></td>
					<td id="adate"></td>
					<td id="Tim"></td>
          <td id="postedc"></td>
          <td id="sle"></td>
				</tr>
			</table>
			</div>-->


			<script>
				
		/*	function writeToPage(){

					var fn = document.getElementById("Amount").value;
					var un = document.getElementById("Date").value;
					var em = document.getElementById("Time").value;
          var cm = document.getElementById("newcom").value;
          var sl = document.getElementById("select").value;

					if(fn === ""){
						alert("Please fill out the Full Name field.");
						document.getElementById("p1").style.color = "red";
						document.getElementById("p1").style.fontFamily = "Arial";
						document.getElementById("p1").style.fontSize = "larger"; 
					}
					else if(un === ""){
						alert("Please fill out the Username field.");
						document.getElementById("p2").style.color = "red";
						document.getElementById("p2").style.fontFamily = "Arial";
						document.getElementById("p2").style.fontSize = "larger";
					}
					else if(em === ""){
						alert("Please fill out email field.");
						document.getElementById("p3").style.color = "red";
						document.getElementById("p3").style.fontFamily = "Arial";
						document.getElementById("p3").style.fontSize = "larger";
					}
					else if(cm === ""){
						alert("Please fill out the comment section.");
						document.getElementById("p5").style.color = "red";
						document.getElementById("p5").style.fontFamily = "Arial";
						document.getElementById("p5").style.fontSize = "larger";
          }
          else if(sl === ""){
						alert("Please fill out the Username field.");
						document.getElementById("p4").style.color = "red";
						document.getElementById("p4").style.fontFamily = "Arial";
						document.getElementById("p4").style.fontSize = "larger";
					}
					else{

            document.getElementById("Amoun").innerHTML = fn;
						document.getElementById("adate").innerHTML = un;
						document.getElementById("postedc").innerHTML = cm;
            document.getElementById("Tim").innerHTML = em;
            document.getElementById("sle").innerHTML = sl;

            
					}	
				} */
			
		</script>
		
	</body>
</html>