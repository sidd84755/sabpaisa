<?php
session_start();
include('Authentication.php');
$query = $_REQUEST['encResponse'];

$authKey = 'zvMzY0UZLxkiE6ad';
$authIV = 'iFwrtsCSw3j7HG15';

$decText = null;
$AesCipher = new AesCipher();
$decText = $AesCipher -> decrypt($authKey, $authIV, $query); 


$token = strtok($decText,"&");
//echo $token;
$i=0;

/* response value After Decryption

payerName=YUVRAJ MISHRA&payerEmail=yuvraj.mishra@sabpaisa.in&payerMobile=7004069540&clientTxnId=1907&payerAddress=NA&amount=10.0
&clientCode=NITE5&paidAmount=10.1&paymentMode=Debit Card&bankName=BOB&amountType=INR&status=FAILED&statusCode=0300&challanNumber=null
&sabpaisaTxnId=883602112220421050&sabpaisaMessage=Sorry, Your Transaction has Failed.&bankMessage=DebitCard&bankErrorCode=null
&sabpaisaErrorCode=null&bankTxnId=101202235510088892&transDate=Wed Dec 21 16:26:28 IST 2022&udf1=NA&udf2=NA&udf3=NA&udf4=NA&udf5=NA
&udf6=NA&udf7=NA&udf8=NA&udf9=null&udf10=null&udf11=null&udf12=null&udf13=null&udf14=null&udf15=null&udf16=null&udf17=null&udf18=null
&udf19=null&udf20=nulli- */

//echo $token;

while ($token !== false)
{
  $i=$i+1;
  $token1=strchr($token, "=");
  $token=strtok("&");
  $fstr=ltrim($token1,"=");

 //echo "i-". $i . '='. $fstr;
 //echo '<br>';

 //echo $fstr;
  if($i==1)
      $payerName=$fstr;
  if($i==2)
      $payerEmail=$fstr;;
  if($i==3)
      $payerMobile=$fstr;
  if($i==4)
      $clientTxnId=$fstr;
  if($i==5)
      $payerAddress=$fstr;
  if($i==6)
      $amount=$fstr;
  if($i==7)
      $clientCode=$fstr;
  if($i==8)
      $paidAmount=$fstr;
  if($i==9)
      $paymentMode=$fstr;
  if($i==10)
      $bankName=$fstr;
  if($i==11)
      $amountType=$fstr;
  if($i==12)
      $status=$fstr;  
  if($i==13)
	    $statusCode=$fstr; 
  if($i==14)
	    $challanNumber=$fstr;
  if($i==15)
	    $sabpaisaTxnId=$fstr;
  if($i==16)
	    $sabpaisaMessage=$fstr;
  if($i==17)
	    $bankMessage=$fstr;
  if($i==18)
	    $bankErrorCode=$fstr;
  if($i==19)
	    $sabpaisaErrorCode=$fstr;
  if($i==20)
	    $bankTxnId=$fstr;				
  if($i==21)
      $transDate=$fstr;

	if($token == true)
	{
	   // $up = "UPDATE  buy_now SET txid='$pgTxnId', tx_dt='$transDate', status='1' WHERE student_id='$userid'";
	      //$up = "UPDATE  buy_now SET txid='$pgTxnId', tx_dt='$transDate', status=1 WHERE student_id=$ufd20";
	     // echo $up;
	  //  mysqli_query($conn,$up);
	    
	}

}
?>

<?php
//include('header.php');
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
    <style>
        table.customTable {
            width: 100%;
            background-color: #FFFFFF;
            border-collapse: separate;
            border-width: 3px;
            border-color: #7EA8F8;
            border-style: solid;
            color: #000000;
        }

        table.customTable td, table.customTable th {
            border-width: 3px;
            border-color: #7EA8F8;
            border-style: solid;
            padding: 5px;
        }

        table.customTable thead {
            background-color: #7EA8F8;
        }

    </style>
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
                <div>
                    <div class="page-title">Payment Success Page</div>
                </div>
                <div>
                    <h1>Thank You,<?php echo $payerName;?></h1>
                </div>
                <div>
                    Your payment for Rs. <?php echo $amount;?> is <?= $status; ?>.</h1>
                </div>
                <div>
                <table class="customTable">
                <thead>
                    <tr>
                    <th>Header</th>
                    <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Payer Name</td>
                    <td><?php echo $payerName;?></td>
                    </tr>
                    <tr>
                    <td>Payer Email</td>
                    <td><?php echo $payerEmail;?></td>
                    </tr>
                    <tr>
                    <td>Payer Mobile</td>
                    <td><?php echo $payerMobile;?></td>
                    </tr>
                    <tr>
                    <td>Trs. I.D</td>
                    <td><?php echo $sabpaisaTxnId;?></td>
                    </tr>
                    <tr>
                    <td>Amount Paid</td>
                    <td><?php echo $paidAmount;?></td>
                    </tr>
                    <tr>
                    <td>Payment Mode</td>
                    <td><?php echo $paymentMode;?></td>
                    </tr>
                    <tr>
                    <td>Status</td>
                    <td><?php echo $status;?></td>
                    </tr>
                    <tr>
                    <td>Status Code</td>
                    <td><?php echo $statusCode;?></td>
                    </tr>
                </tbody>
                </table>



                </div>
            </div>
        </div>
        
    </section>
    
    
</body>
</html>


    <?php
    // include('footer.php');
     ?>