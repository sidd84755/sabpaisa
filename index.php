<?php

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
                
    
                <form action="#" method="" id="signup" novalidate class="mbox2c">
                    <div>
                        <input placeholder="First Name" class="input" type="text" id="name" name="name">
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
    </script>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    