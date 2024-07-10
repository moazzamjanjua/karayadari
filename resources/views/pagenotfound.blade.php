<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotFound</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .frem{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: url('./gifs.gif');
        background-position: center;
        background-repeat: no-repeat;
    }
    .frem p{
        position: absolute;
        top: 3rem;
        font-size: 7rem;
        color:black;
    }
    .frem h2{
        position: absolute;
        bottom: 8rem;
        font-size: 34px;
    }
    
    
    .frem a{
        position: absolute;
        bottom: 1rem;
        background: linear-gradient(45deg, #ff0034, #ffbc00);
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 23px;
        border-radius: 13px;
    }
</style>

<body>
    <div class="frem">
        <p>404 Not Found</p>
        <img src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif" alt="Sticker"><br><br>
        <h2>Oopss !!!! the page you are looking for not avaible!</h2>
        
        <a href="/">Go to Home</a>
    </div>
</body>

</html>