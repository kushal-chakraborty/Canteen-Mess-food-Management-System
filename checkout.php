<?php
	session_start();
	if(isset($_POST['amount'])){
		$amount=$_POST['amount'];
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="stylo.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<div id="submitmenu1">
    		<br>
        <h1>Check-Out</h1>
		<pre>
		</pre>
		<form method="post" action="pgRedirect.php">
			<table class="content-table" id="lololtable">
				<tbody>
					<thead>
						<tr>
							<th>S.No</th>
							<th>Label</th>
							<th>Value</th>
						</tr>
					</thead>
					<tr>
						<td>1</td>
						<td><label>ORDER_ID::*</label></td>
						<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
							name="ORDER_ID" autocomplete="off"
							value="<?php echo  "ORDS" . rand(10000,99999999)?>">
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td><label>CUSTID ::*</label></td>
						<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="on" value="CUST001"></td>
					</tr>
					<tr>
						<td>3</td>
						<td><label>INDUSTRY_TYPE_ID ::*</label></td>
						<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
					</tr>
					<tr>
						<td>4</td>
						<td><label>Channel ::*</label></td>
						<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
							size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
						</td>
					</tr>
					<tr>
						<td>5</td>
						<td><label>txnAmount*</label></td>
						<td><input title="TXN_AMOUNT" tabindex="10"
							type="text" name="TXN_AMOUNT"
							value="<?php echo $amount; ?>"  readonly>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input value="CheckOut" type="submit" class="mutton" id="lele" onclick=""></td>
					</tr>
				</tbody>
			</table>
			* - Mandatory Fields
		</form>
		</div>
        <script src="js/main.js"></script>
    </body>
</html>
