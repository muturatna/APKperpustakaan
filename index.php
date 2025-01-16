<?php
  include("database.php")
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custom Bootstrap</title>
    <link href="/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello, world!</h1>
  </body>
</html>
<script>
    document.querySelector("form").addEventListener("submit", function(e) {
        const username = document.querySelector("input[name='username']").value;
        const password = document.querySelector("input[name='password']").value;

        if (username.trim() === "" || password.trim() === "") {
            e.preventDefault();
            alert("Semua field harus diisi!");
        }
    });
</script>