<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Product</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h2>Add New Product</h2>
        <form method="post" action="{{url('products')}}">
            @csrf
            <p>
                <label for="code">Product Code:</label>
                <input type="text" name="code">
            </p>
            <p>
                <label for="name">Product Name:</label>
                <input type="text" name="name">
            </p>
            <p>
                <button type="submit">Submit</button>
            </p>
        <?php
        // put your code here
        ?>
    </body>
</html>
