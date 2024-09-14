<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Loon's Algo</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
    integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <img src="./image.jpg" alt="background" class="background">
    <nav>
    <a href="index.php" class="logo">Card Validator</a>
    <ul>
        <a href="abord.php" class="CTA">Log Out</a>
        <a href="algo.php" class="CTA">Algorithem</a>
        <a href="features.php" class="CTA">Features</a>
        <a href="" class="CTA">Hey!<?php echo $_SESSION["username"]; ?></a>
    </ul>
    </nav>

    <div class="hero">
    <section class="text-gray-400 body-font">
        <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
        <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
            Card Validation

            </h1>
            <div class="flex w-full justify-center items-end">
            Card validation is a process to check if a credit card is valid for online purchases or not.
             There are pre and post validation processes.
            </div>
            <div class="title-font  sm:text-xl text-xl mb-4 font-small text-white">
                 How to do Credit Card Validation            
            </div>
            <p class="flex w-full justify-center items-end">Credit card numbers are generated according to certain rules. 
                It gives merchants a way to verify the validity of a card number before accepting the customer's payment.
                The calculation to compare a credit card number with your checksum is known as the Luhn algorithm.</p>
            <h2 class="title-font sm:text-4xl text-2xl mb-3 font-medium text-white">
            What do the Digits on a Credit Card Number Mean?
            </h2>
            <div class="flex w-full justify-center items-end">
            To understand the composition of a credit card number, we can break it down into four parts:<br>        
            </div>
            <div class="text-left">
            <ul class="list-disc">
                    <br>
                    <li class="list-group-item">The 1st Digit: The first digit is the card network indicator. Some card networks use the first 2 digits as their identification as well<br>For example, Visa cards always start with a ‘4’ whereas Amex cards always start with a ‘3’ which is immediately followed by either a ‘7’ or a ‘4'.</li>
                    <li class="list-group-item">2nd to 6th Digits: The 2nd, 3rd, 4th, 5th and 6th digits are used to identify the card issuer e.g., a bank branch.</li>
                    <li class="list-group-item">6th to Second-to-Last Digit: All the digits, after the 6th up till the second-to-last one, are generated uniquely for every cardholder.</li>
                    <li class="list-group-item">Last Digit: The last digit in any credit card number is called the ‘checksum’ or the ‘check digit’.
                    This value is used to verify whether the rest of the numbers are correctly placed. This validation is done using the Luhn algorithm.</li>
                </ul>
            </div>
            


        </div>
        
      </div>
    </section>
  </div>
</body>

</html>
</body>
</html>
