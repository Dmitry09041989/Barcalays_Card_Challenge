<?php
/* ---------------------- */

//== static modified template ==//

//- Customer/Order Details - //
$UserTitle="Mr";
$UserFirstname="Edward";
$UserSurname="Shopper";
$BillHouseNumber = "123";
$Ad1="Penny Lane";
$Ad2="Central Areas";
$BillTown = "Middlehampton";
$BillCountry = "England";
$Pcde = "NN4 7SG";
$ContactTel="01604 567 890";
$ShopperEmail = "Mr.E.Shopper@coolmail.com";
$ShopperLocale="en_GB";
$CurrencyCode="GBP";

$Addressline1n2 = $BillHouseNumber . " " .$Ad1 . ", ". $Ad2;
$CustomerName = $UserTitle . " " . $UserFirstname . " " . $UserSurname;

$PaymentAmount = "100"; 			// this is 1 pound (100p)
$OrderDataRaw = "HDTV - AVTV3000"; 	// order description
$OrderID = "ORD123456";				// Order Id - needs to be unique

//- integration user details - //
$PW ="MyShaInPassPhrase";
$PSPID = "MyPSPID";

//- payment design options - //
$TXTCOLOR="#005588";
$TBLTXTCOLOR="#005588";
$FONTTYPE="Helvetica, Arial";
$BUTTONTXTCOLOR	="#005588";
$BGCOLOR = "#d1ecf3";
$TBLBGCOLOR  = "#ffffff";
$BUTTONBGCOLOR  = "#cccccc";
$TITLE = "Merchant Shop - Secure Payment Page";
$LOGO = "https://www.merchantsite.co.uk/images/merchant/bcarddemo/AV_SimpleLogo_BW.JPG";
$PMLISTTYPE=1;

//= create string to hash (digest) using values of options/details above
$DigestivePlain =
    "AMOUNT=" . $PaymentAmount . $PW .
    "BGCOLOR=" . $BGCOLOR . $PW .
    "BUTTONBGCOLOR=" . $BUTTONBGCOLOR . $PW .
    "BUTTONTXTCOLOR=" . $BUTTONTXTCOLOR . $PW .
    "CN=" . $CustomerName  . $PW .
    "COM=" . $OrderDataRaw  . $PW .
    "CURRENCY=" . $CurrencyCode . $PW .
    "EMAIL=" . $ShopperEmail . $PW .
    "FONTTYPE=" . $FONTTYPE . $PW .
    "LANGUAGE=" . $ShopperLocale . $PW .
    "LOGO=" .$LOGO . $PW .
    "ORDERID=" . $OrderID . $PW .
    "OWNERADDRESS=" . $Addressline1n2 . $PW .
    "OWNERCTY=" . $BillCountry . $PW .
    "OWNERTELNO=" . $ContactTel . $PW .
    "OWNERTOWN=" . $BillTown . $PW .
    "OWNERZIP=" . $Pcde . $PW .
    "PMLISTTYPE=". $PMLISTTYPE . $PW .
    "PSPID=" . $PSPID . $PW .
    "TBLBGCOLOR=" . $TBLBGCOLOR . $PW .
    "TBLTXTCOLOR=" . $TBLTXTCOLOR . $PW .
    "TITLE=" . $TITLE . $PW .
    "TXTCOLOR=" . $TXTCOLOR . $PW .
    "";

//=SHA encrypt the string=//
$strHashedString_plain = strtoupper(sha1($DigestivePlain));


//-Form to submit order details along with encrypted string of order details
?>
<html>
<body>
<p>Press submit to continue to payment.</p>

<form name="OrderForm" id="OrderForm" action="https://mdepayments.epdq.co.uk/ncol/test/orderstandard.asp" method="POST">
    <input type="hidden" name="AMOUNT" id="AMOUNT" value="<?PHP print $PaymentAmount; ?>"/>
    <input type="hidden" name="CN" value="<?PHP print $CustomerName; ?>">
    <input type="hidden" name="COM" value="<?PHP print $OrderDataRaw; ?>">
    <input type="hidden" name="CURRENCY" id="CURRENCY" value="<?PHP print $CurrencyCode; ?>"/>
    <input type="hidden" name="EMAIL" id="EMAIL" value="<?PHP print $ShopperEmail; ?>">
    <input type="hidden" name="FONTTYPE" id="FONTTYPE" value="<?PHP print $FONTTYPE; ?>">
    <input type="hidden" name="LANGUAGE" id="LANGUAGE" value="<?PHP print $ShopperLocale; ?>">
    <input type="hidden" name="LOGO" value="<?PHP print $LOGO; ?>">
    <input type="hidden" name="ORDERID" id="ORDERID" value="<?PHP print $OrderID ?>"/>
    <input type="hidden" name="OWNERADDRESS" id="OWNERADDRESS" value="<?PHP print $Addressline1n2; ?>">
    <input type="hidden" name="OWNERCTY" id="OWNERCTY" value="<?PHP print $BillCountry; ?>">
    <input type="hidden" name="OWNERTELNO" value="<?PHP print $ContactTel; ?>">
    <input type="hidden" name="OWNERTOWN" id="OWNERTOWN" value="<?PHP print $BillTown; ?>">
    <input type="hidden" name="OWNERZIP" id="OWNERZIP" value="<?PHP print $Pcde; ?>">
    <input type="hidden" name="PMLISTTYPE" id="PMLISTTYPE" value="<?PHP print $PMLISTTYPE ?>"/>
    <input type="hidden" name="PSPID" id="PSPID" value="<?PHP print $PSPID ?>"/>
    <input type="hidden" name="BGCOLOR" id="BGCOLOR" value="<?PHP print $BGCOLOR; ?>"/>
    <input type="hidden" name="BUTTONBGCOLOR" id="BUTTONBGCOLOR" value="<?PHP print $BUTTONBGCOLOR; ?>"/>
    <input type="hidden" name="BUTTONTXTCOLOR" id="BUTTONTXTCOLOR" value="<?PHP print $BUTTONTXTCOLOR; ?>"/>
    <input type="hidden" name="TBLBGCOLOR" id="TBLBGCOLOR" value="<?PHP print $TBLBGCOLOR; ?>"/>
    <input type="hidden" name="TBLTXTCOLOR" id="TBLTXTCOLOR" value="<?PHP print $TBLTXTCOLOR; ?>">
    <input type="hidden" name="TITLE" id="TITLE" value="<?PHP print $TITLE; ?>"/>
    <input type="hidden" name="TXTCOLOR" id="TXTCOLOR" value="<?PHP print $TXTCOLOR; ?>">

    <input type="hidden" name="SHASign" value="<?PHP print $strHashedString_plain; ?>">

    <input onclick="document.OrderForm.submit(); return false;" type="image" src="images/submit.gif" id="tstbtn" />

</form>
</body>
</html>
