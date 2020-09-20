<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo URLROOT;?>/css/materialize.css" rel="stylesheet">
    <link href="<?php echo URLROOT;?>/css/animations.css" rel="stylesheet">
    <link href="<?php echo URLROOT;?>/css/style.css" rel="stylesheet">

    <link rel="stylesheet"  href="<?php echo URLROOT; ?>/public/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property='og:title' content='<?php echo $data['title']?>'/>
    <meta property='og:site_name' content='<?php echo SITENAME?>'/>
    <meta property='og:type' content='website'/>
    <meta property='og:description' content='<?php echo $data['description']?>'/>
    <meta property='og:image' content='<?php echo FAVICON?>'/>
    <link rel="icon" href="<?php echo FAVICON ?>">
    <title><?php echo $data['title']?> - <?php echo SITENAME; ?></title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top"
  style = 'background: linear-gradient(45deg, #e2d1c3,#fdfcfb);animation: gradient 1s ease infinite;background-size: 150% 150%;'>
    <a class="navbar-brand" href="<?php echo URLROOT?>"><?php echo SITENAME?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo URLROOT?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Explore
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo URLROOT?>/explore/demo">Demos</a>
            <a class="dropdown-item" href="<?php echo URLROOT?>/explore/project">Projects</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo URLROOT?>/explore/website">Website</a>
            <a class="dropdown-item" href="<?php echo URLROOT?>/explore/software">Software</a>
            <a class="dropdown-item" href="<?php echo URLROOT?>/explore/game">Game</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo URLROOT?>/explore">All</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT?>/contact" tabindex="-1">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method='POST' action="<?php echo URLROOT?>/explore">
        <input name='explore' class="form-control mr-sm-2" type="search" placeholder="Find a Project" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
