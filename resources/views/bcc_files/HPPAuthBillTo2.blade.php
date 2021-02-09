{{--
VISA 4111 1111 1111 1111

CVC any 3
--}}

{{--MC 5454 5454 5454 5454

CVC any 3
--}}


<?php
//dd($_POST);
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
//$SECRET_KEY = "*enter your secret_key*";

$SECRET_KEY = "a40b14f60e534edcb6f747329b4417d39d7c8c5e8604453aac45ab361d94d5254fabacbb4525465fa7a2632abbc11e7a4204864d09c64b4596c5fbcb2113bb0c6d8c5518803144eb95e22515981cfc61163b68b207914996ba7324154e7938a2e8a0381f34ad4107997a09eb307282bf1ee00d855e07463998b8a1b08b88285f";

define ('SECRET_KEY', 'a40b14f60e534edcb6f747329b4417d39d7c8c5e8604453aac45ab361d94d5254fabacbb4525465fa7a2632abbc11e7a4204864d09c64b4596c5fbcb2113bb0c6d8c5518803144eb95e22515981cfc61163b68b207914996ba7324154e7938a2e8a0381f34ad4107997a09eb307282bf1ee00d855e07463998b8a1b08b88285f');

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


@extends('layouts.main_layout')
@section('title') About @endsection
@section('main_content')

    <form class="text-white" method="post" action="https://testsecureacceptance.cybersource.com/pay" name="GatewayPush">
        @csrf

        <table >
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

@endsection
