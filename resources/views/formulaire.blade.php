<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            color: #333;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Container */
        .div,.data {
            background-color: white;
            padding: 30px;
            /* width: 400px; */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            margin-top: 20px;
        }

        /* Heading and Paragraph */
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
            color: #333;
        }

        p {
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }
        .data p {
            font-size: 18px;
            color: #000;
        }

        /* Labels */
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        /* Input Fields */
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        input[type="text"]:focus, input[type="email"]:focus, select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Select Box */
        select {
            background-color: #fff;
            cursor: pointer;
        }

        /* Submit Button */
        button {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        /* Retrieved Data Display */
        .retrieved-data {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            border: 1px solid #ddd;
        }

        .retrieved-data h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .retrieved-data p {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
        }

        /* Small Screen Styling */
        @media (max-width: 768px) {
            .div, .retrieved-data {
                width: 90%;
            }
        }
        .container{
            display: flex;
            justify-content: space-around;
            align-items: center;

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="div">
            <h1>Formulaire d'inscription des étudians</h1>
            <p>Reamplissez Soigneusement le formulaire d'inscription
            </p>
            <h4>Nom Complete</h4>
            
                <form action="/formm" method="POST">
                    @csrf 
                    <div >
                        <label>Prénom</label>
                        <input type="text" name="nom">
                
                        <label>Nom de famille</label>
                        <input type="text" name="prénom">
                    </div>
                  
        
                    <label>Sexe</label>
                    <select name="sexe">
                        <option value="femme">femme</option>
                        <option value="homme">homme</option>
                    </select>
        
        
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="monnom@example.com" 
                    pattern="[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}" required>            
        
                    <br>
                    <br>
                    <br>
                    <br>
        
                    <button>Soumettre l'inscription</button>
                </form>
        </div>
       
           
        <div class="data">
            @if(isset($nom) && isset($prénom) && isset($sexe) && isset($email))
            <p>Vous avez bien inscrit</p>
            <p>Nom: {{$nom}}</p>
            <p>Prénom: {{$prénom}}</p>
            <p>Sexe: {{$sexe}}</p>
            <p>Email: {{$email}}</p>
            @endif
    
        </div>
       
    </div>
   
       
</body>
</html>