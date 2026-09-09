<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php
        echo isset($pageTitle)
            ? htmlspecialchars($pageTitle)
            : "SD MEDIA TECH | Digital Marketing Agency";
        ?>
    </title>

    <meta
        name="description"
        content="<?php
        echo isset($pageDescription)
            ? htmlspecialchars($pageDescription)
            : 'Professional digital marketing agency helping businesses grow through paid advertising, SEO, social media and web development.';
        ?>"
    >

    <meta
        name="robots"
        content="index, follow"
    >


    <!-- Google Fonts -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >


    <!-- Main CSS -->

   <link
    rel="stylesheet"
    href="/website/assets/css/style.css"
>

</head>

<body>