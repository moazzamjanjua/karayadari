

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <style>
.back-button {
            position: absolute;
            top: 20px;
            left: 5px;
            padding: 10px 40px;
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            border: none;
            border-radius: 6px;
            color: white;
            height: 45px;
            white-space: nowrap;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        </style>
        <script>
function goBack() {
window.history.back();
}
</script>
        <body>
        <a onclick="goBack()" class="back-button">DashBoard</a>  
        </body>
        </html>