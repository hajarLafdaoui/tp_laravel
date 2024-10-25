<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .con {
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            color: white; /* Change text color */
            text-align: center; /* Center text */
            background-image: url('{{ asset('images/1.jpg') }}'); 
            background-size: cover;
             background-position: center;
              height: 100vh;
        }
        .articles{
            display: flex;
            justify-content: center;
            gap: 40px;
        }
        .card{
            width: 22rem;
        }
        </style>

</head>
<body>

    <!-- Call the Header Component -->
    <x-header />

  
    <x-img-h1 />
    
    <div class="articles">

        <x-articles src="{{asset('images/2.jpg')}}" title="Première activité" />
        <x-articles src="{{asset('images/3.jpg')}}" title="Deuxième activité" />
        <x-articles src="{{asset('images/4.jpg')}}" title="troisième activité" />

    </div>
  


    <!-- Call the Footer Component -->
    <x-footer />

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
