<?php

session_start();
include 'Authentication.php';

$encData=null;

$clientCode='NITE5';
$username='Ish988@sp';
$password='wF2F0io7gdNj';
$authKey='zvMzY0UZLxkiE6ad';
$authIV='iFwrtsCSw3j7HG15';

$payerName ='siddharth';
$payerEmail='sidd84755@gmail.com';
$payerMobile='9988776655';
$payerAddress='Lucknow';

$clientTxnId=rand(1000,9999);
$amount=10;
$amountType='INR';
$mcc=5137;
$channelId='W';
$callbackUrl='http://127.0.0.1/sabpaisa/SabPaisaPostPgResponse.php';
// Extra Parameter you can use 20 extra parameters(udf1 to udf20)
//$Class='VIII';
//$Roll='1008';

$encData="?clientCode=".$clientCode."&transUserName=".$username."&transUserPassword=".$password."&payerName=".$payerName.
"&payerMobile=".$payerMobile."&payerEmail=".$payerEmail."&payerAddress=".$payerAddress."&clientTxnId=".$clientTxnId.
"&amount=".$amount."&amountType=".$amountType."&mcc=".$mcc."&channelId=".$channelId."&callbackUrl=".$callbackUrl;
//."&udf1=".$Class."&udf2=".$Roll;
				
$AesCipher = new AesCipher(); 
$data = $AesCipher->encrypt($authKey, $authIV, $encData);

?>    
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <!-- <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script> -->
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <section class="mbox">
        <div class="mbox1">
            <a class="navbar-brand nav-title mobile-hidden" href="#"> <img src="https://cdn-fjald.nitrocdn.com/KFzmISOEYBnVYfzMObuWupjEoUkmSGKh/assets/images/optimized/rev-7801817/sabpaisa.in/wp-content/uploads/2023/06/logo-211x.png"
                alt="logo-img" class="logo" style="height: 50px;margin-left: 25px;border-radius: 50%;" /></a> 
            <h1 class="heading0">SabPaisa Payment Gateway Integration</h1>
        </div>
        <div class="mbox2"> 
            
            <div class="mbox2b">
                <img src="./images/img1.png" alt="logo-img" style="width: 140px;transform: translate(-120px,0);" />
            </div>
            <div class="mbox2c">
                
    
                <form action="https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1" method="post" id="signup" novalidate class="mbox2c">
                    <div>
                        <input placeholder="Payer Name" class="input" type="text" name="payerName" id="payerName">
                    </div>
                    <div>
                        <input placeholder="Last Name" class="input" type="text" id="name" name="name">
                    </div>
                    
                    <div>
                        <input placeholder="Email" class="input" type="email" id="email" name="email" pattern=".+@globex\.com" size="30" required>
                    </div>
                    
                    <div>
                        <input placeholder="Phone Number" class="input" type="tel" id="phone" name="phone" maxlength="10">
                    </div>
                    
                    <div style="display: none;">
                        <input placeholder="Country Code" class="input" type="text" id="country_code" name="country_code" value='&#x2b;91'>
                    </div>
                    
                    <div>
                        <input placeholder="Amount" class="input" type="number" id="number" name="password" min="10">
                    </div>
                    <input type="hidden" name="encData" value="<?php echo $data?>" id="frm1">
                    <input type="hidden" name="clientCode" value ="<?php echo $clientCode?>" id="frm2">
                    <input type="hidden" name="payerName" value="" id="frm3">
                    <button class="btn">Proceed</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input,({
        initialCountry: "In",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    }));    

    $(document).ready(function() {
        $('.iti__flag-container').click(function() { 
          var countryCode = $('.iti__selected-flag').attr('title');
          var countryCode = countryCode.replace(/[^0-9]/g,'')
          $('#country_code').val("");
          $('#country_code').val("+"+countryCode+" "+ $('#country_code').val());
       });
    });

    var payerNameInput = document.getElementById("payerName");

    // Listen for changes in the payerName input field
    payerNameInput.addEventListener("input", function () {
        // Get the current value of the payerName input
        var payerNameValue = payerNameInput.value;

        // Update the hidden field with the payerName value
        document.getElementById("frm3").value = payerNameValue;
        console.log(payerNameValue);
    });
    </script>
    
</body>
</html>

    
    
    
    
    
    
    
    
    
    