<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Product Details</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h2>Edit Product Details</h2><br  />
        <form method="post" action="{{action('ProductController@update', $id)}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <p>
            <lable for="code">Product Code: </lable>
            <input type="text" name="code" value="{{$product->code}}">
            </p>
            <p>
                <lable for="name">Product Name: </lable>
            <input type="text" name="name" value="{{$product->name}}">
            </p>
            <p>
                <button type="submit" style="margin-left: 38px">Update</button>
            </p>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
