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
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white"><?php
                    if(isset($_GET['error'])){
                        echo "<h1>Invalid Card Number</h1>";
                    }
                    if(isset($_GET['success'])){
                        if($_GET['success'] == 1){
                            echo "<h1 style='font-size: 36px'>Card is Valid</h1>";
                        if(isset($_GET['cardType'])){
                            $cardType = $_GET['cardType'];
                            if(cardType == 'Visa'){
                            echo "type of card is Visa.";
                        }
                        else if(cardType == 'Master'){
                            echo "type of card is Master.";
                        }
                        else if(cardType == 'American'){
                            echo "type of card is America Express.";
                        }
                        else{
                            echo "Card not in use";
                            }
                        }
                        }
                    else{
                        echo "<h1>Card is not valid.</h1>";
                        }
                    }
    ?></h1>
            <p class="mb-8 leading-relaxed"></p>
            <div class="flex w-full justify-center items-end">
            <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left" style="display: flex; justify-content: center; align-items: center; flex-flow: column;">
                <label for="hero-field" class="leading-7 text-sm text-gray-400"></label>
                
                <button onclick="history.back()" class="submit inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg CTA">Validate More</button>
            </div>
          </div>
          <p class="text-sm mt-2 text-gray-500 mb-8 w-full">Validate cards, it's free!!!.</p>
          <div class="flex text-gray-300">
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
</body>
</html>
card validator 