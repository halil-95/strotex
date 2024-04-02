<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Halil Aliyew">
    <meta name="keywords" content="HTML, CSS, stylus, fansybox, JavaScript">
    <meta name="description"
        content="website created by codertime.site  design multisiting page downloaded from the Internet hh.ru" >
    <base href="<?=get_template_directory_uri();?>/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link title="helli" rel="icon" href="dist/img/ЛОГО-СТРОЙТЕНИКА-ЧЕРНЫЙ-—-ПЕСОК.png" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="dist/fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="dist/fonts/icomoon/style.css">
    <link rel="stylesheet" href="dist/fonts/fontello/css/fontello.css">
    <link rel="stylesheet" href="dist/fonts/romoto/stylesheet.css">
    <link rel="stylesheet" href="dist/css/stylesheets.min.css">
    <title title="website created by codertime.site  design multi-page downloaded from the Internet">stroitehnika1
    </title>
    <?php wp_head();?>
</head>
<body>
    <header class="flex_column">
        <div class="header__top flex">
            <div class="header__top__block container">
                <h1>Производитель оборудования и производственных линий для различных отраслей промышленности с 1990 г.
                </h1>
            </div>
        </div>
        <?php get_template_part("templates/header/contact/main-block");?>
        <?php get_template_part("templates/header/menu");?>
       
    </header>