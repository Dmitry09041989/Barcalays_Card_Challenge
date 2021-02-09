<html>
<head>
<?php
	$transaction_uuid = $_POST['transaction_uuid'];
	$locale = $_POST['locale'];
	$transaction_type = $_POST['transaction_type'];
	$reference_number = $_POST['reference_number'];
	$amount = $_POST['amount'];
	$currency = $_POST['currency'];
	$signed_date_time = $_POST['signed_date_time'];
	$access_key = $_POST['access_key'];
	$profile_id = $_POST['profile_id']; // 0493609F-8654-4C25-96FA-DAA1CC5FC298
    $signed_field_names = $_POST['signed_field_names'];
	$unsigned_field_names = $_POST['unsigned_field_names'];
	$bill_to_address_city = $_POST['bill_to_address_city'];
	$bill_to_address_country = $_POST['bill_to_address_country'];
	$bill_to_address_line1 = $_POST['bill_to_address_line1'];
	$bill_to_address_postal_code = $_POST['bill_to_address_postal_code'];
	$bill_to_email = $_POST['bill_to_email'];
	$bill_to_forename = $_POST['bill_to_forename'];
	$bill_to_surname = $_POST['bill_to_surname'];
	$SECRET_KEY = "*enter your secret_key*";

	define ('SECRET_KEY', '*enter your secret_key*');

	foreach($_REQUEST as $parameter_name => $parameter_value) {
        $params[$parameter_name] = $parameter_value;
    }

	function sign ($params) {
		return signData(buildDataToSign($params), SECRET_KEY);
	}

	function signData($data, $secretKey) {
		return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
	}

	function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
	}

	function commaSeparate ($dataToSign) {
		return implode(",",$dataToSign);
	}

?>
{{--<style>--}}
{{--	body{font:"Tahoma"}--}}
{{--</style>--}}
</head>
<body>

	<h1 align="center">
		Fuse Pre Payment HPP
	</h1>
	<form method="post" action="https://testsecureacceptance.cybersource.com/pay" name="GatewayPush">

	<table>
		<col width="180">
		<col width="180">

	<?php
            foreach($params as $parameter_name => $parameter_value) {
                echo "<tr><td>" . $parameter_name . "</td><td>" . $parameter_value . "</td></tr>";
            }
        ?>
	</table>

	<?php
        foreach($params as $parameter_name => $parameter_value) {
            echo "<input type=\"hidden\" id=\"" . $parameter_name . "\" name=\"" . $parameter_name . "\" value=\"" . $parameter_value . "\"/>\n";
        }
        echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";

		echo "<br><br>";
		print buildDataToSign($params);
		echo "<br><br>";
		print sign($params);
    ?>
	<br /><br />

	<input type="submit" id="submit" value="Pay" style="height:30px; width:150px">
	</form>
</body>
</html>
