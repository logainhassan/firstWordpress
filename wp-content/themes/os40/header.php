<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Os 40</title>
    <?php wp_head();?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
        <a class="navbar-brand" href="/firstWordpress">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            wp_nav_menu(
            array(
                "theme_location" => "main-menu",
                'container' => 'ul',
                "menu_class" => "navbar-nav mr-auto",
                
                )
            );
        ?> 
        
    </nav>
  
</header>