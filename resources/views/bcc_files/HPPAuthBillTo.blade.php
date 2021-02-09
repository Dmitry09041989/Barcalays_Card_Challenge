

@extends('layouts.main_layout')
@section('title') About @endsection
@section('main_content')


    <form method="post" action="{{ route('p2') }}" name=BaseForm>
        @csrf
        <table align="center" class="text-white">
            <col width="180">
            <col width="180">

            <tr>
                <td>
                    transaction_uuid
                </td>
                <td>
                    <input type="text" name="transaction_uuid" value="<?php echo uniqid() ?>" >
                </td>
            </tr>

            <tr>
                <td>
                    locale
                </td>
                <td>
                    <input type="text" name="locale" value="en">
                </td>
            </tr>

            <tr>
                <td>
                    transaction_type
                </td>
                <td>
                    <input type="text" name="transaction_type" value="authorization">
                </td>
            </tr>

            <tr>
                <td>
                    reference_number
                </td>
                <td>
                    <input type="text" name="reference_number" value="<?php echo uniqid() ?>">
                </td>
            </tr>

            <tr>
                <td>
                    amount
                </td>
                <td>
                    <input type="text" name="amount" value="350.00">
                </td>
            </tr>

            <tr>
                <td>
                    currency
                </td>
                <td>
                    <input type="text" name="currency" value="GBP">
                </td>
            </tr>

            <tr>
                <td>
                    signed_date_time
                </td>
                <td>
                    <input type="text" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <b>Do not change unless necessary</b>
                </td>
            </tr>

            <tr>
                <td>
                    access_key
                </td>
                <td>
                    <input type="text" name="access_key" value="97e593215f5e3c33b236c7c3d4361212">
                </td>
            </tr>

            <tr>
                <td>
                    profile_id
                </td>
                <td>
                    <input type="text" name="profile_id" value="8C66B1C1-8E34-4BF4-9886-E6CE5CED7B00">
                </td>
            </tr>

            <tr>
                <td>
                    signed_field_names
                </td>
                <td>
                    <input type="text" name="signed_field_names"
                           value="access_key,amount,currency,locale,profile_id,reference_number,signed_date_time,signed_field_names,transaction_type,transaction_uuid,unsigned_field_names,bill_to_address_city,bill_to_address_country,bill_to_address_line1,bill_to_address_postal_code,bill_to_email,bill_to_forename,bill_to_surname">
                </td>
{{--                <input type="hidden" name="access_key" value="">--}}

            </tr>

            <tr>
                <td>
                    unsigned_field_names
                </td>
                <td>
                    <input type="text" name="unsigned_field_names" value="">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_address_city
                </td>
                <td>
                    <input type="text" name="bill_to_address_city" value="Northampton">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_address_country
                </td>
                <td>
                    <input type="text" name="bill_to_address_country" value="GB">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_address_line1
                </td>
                <td>
                    <input type="text" name="bill_to_address_line1" value="1234 Pavilion Drive">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_address_postal_code
                </td>
                <td>
                    <input type="text" name="bill_to_address_postal_code" value="NN4 7SG">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_email
                </td>
                <td>
                    <input type="text" name="bill_to_email" value="jbloggs@testemail.co.uk">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_forename
                </td>
                <td>
                    <input type="text" name="bill_to_forename" value="Test">
                </td>
            </tr>

            <tr>
                <td>
                    bill_to_surname
                </td>
                <td>
                    <input type="text" name="bill_to_surname" value="Name">
                </td>
            </tr>

            <tr>
                <td align="center">
                    <input type="submit" value="Pay" style="height:30px; width:150px">
                </td>
                <td align="center">
                    <input type="button" value="Reset" style="height:30px; width:150px" onclick="resetFunction()">
                </td>
            </tr>
        </table>
    </form>
@endsection
