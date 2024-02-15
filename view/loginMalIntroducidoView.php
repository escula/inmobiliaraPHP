<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error de Contraseña</title>
    <style>
        #error-menu {
            width: 300px;
            padding: 20px;
            margin: 0 auto;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
        }
        #error-menu h2 {
            margin-top: 0;
        }
        #error-menu button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div id="error-menu">
    <h2>Error</h2>
    <p>Has introducido algo mal. Por favor, inténtalo de nuevo.</p>
    <button onclick="location.href='login.php'">Perro vuelve al login</button>
</div>
</body>
</html>
