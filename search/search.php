<!DOCTYPE html>
<!-- Document created by Fred Nora -->
<!-- Credits: A. de Regt -->

<html lang="en">

<head>
<meta charset="UTF-8">
<title>Gramado</title>

    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0">
    <meta 
        name="description" 
        content="Gramado Organization">
    <meta 
        name="author" 
        content="Fred Nora">

<style>
            /*
            body {
                background-color: green
            }
            */

            .core {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                border-radius: .33rem;
                padding: 10px;
                background-color: lightyellow; /*#44ab44;*/
                box-shadow: 10px 10px lightgray;
                text-align: center;
            }

            .button {
                border: solid black 1px;
                border-radius: .25rem;
                padding: 10px;
                color: black;
                text-decoration: auto;
                text-align: center;
            }

            .noicon {
                padding-left: 30px;
            }

            .iconpos {
            }

            .button:hover{
                background-color: lightyellow;
            }
</style>

<!-- Prefetch -->
<link rel="dns-prefetch" href="https://github.com/"/>

<!-- Cool links -->
<link href="./assets/css/gramado.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation bar -->
    <nav class="gramado-nav">
        <ul>
            <!-- 1: Developer -->
            <li><a href="#section-1">Developer</a></li>
            <!-- 2: Business person -->
            <li><a href="#section-2">Business</a></li>
            <!-- 3: Sales person -->
            <li><a href="#section-3">Online communication</a></li>
            <!-- 4: User -->
            <li><a href="#section-4">User</a></li>
        </ul>
    </nav>

    <!-- Core module -->
    <div class="core">
    <h1>Gramado Organization</h1>

    <br>
    <?php
        $cwd = getcwd();
        $filename_list = scandir($cwd);
        foreach ($filename_list as $filename)
        {
            /* Only directory names with alphanumeric elements */
            if ( is_dir($filename) && 
                 ctype_alnum($filename) )
            {
    ?>

                <!-- Button -->
                <br/>
                <a href="/<?php echo $filename; ?>/index.html"><?php echo $filename; ?>/</a>

    <?php
            }
        }
    ?>

        <!-- Button -->
        <br/>
        <br/>
        <a 
            class="button" 
            href="https://github.com/gramado/gramado.github.io">
            <img class="iconpos" 
                width="20" 
                height="20" 
                src="https://github.com/fluidicon.png"> See code at GitHub
        </a>
        
        <br/>
        <br/>
        <br/>
    </div>

<!-- Cool scripts -->
<script src="./assets/js/gramado.js"></script>
</body>

</html>