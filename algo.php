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
            Luhn's algorithm
            </h1>
            <div >
                <video src="more/lunhalgo.mp4" controls>algo</video>
            </div>
 


            


        </div>
        
      </div>
    </section>
  </div>
</body>

</html>
</body>
</html>
