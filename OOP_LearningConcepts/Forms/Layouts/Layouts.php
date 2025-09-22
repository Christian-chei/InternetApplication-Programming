<?php
class layouts{
    public function header($conf) {
        ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <meta name="description" content="<?php print $conf['site_name']; ?>">
        <meta name="author" content="<?php print implode(', ', $conf['site_authors']); ?>">
        <meta name="generator"  content="<?php print $conf['version']; ?> ">
        <title> <?php print $conf['site_name']; ?> </title>
        <link href="<?php print $conf['site_url']; ?> css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container py-4">
                <?php
    }
    public function navbar($conf){
        ?>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
                  <div class="container-fluid">
                      <a class="navbar-brand " href="./"> <?php print $conf['site_name']; ?> </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"> </span></button>
                      <div class="collapse navbar-collapse" id="navbarsExample05">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item"> <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'Index.php') print 'active'; ?>" aria-current="page" href="./" >Home </a> </li>
                              <li class="nav-item" > <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'Signup.php') print 'active' ; ?>" href="Signup.php"> Sign Up</a> </li>
                              <li class="nav-item" > <a class="nav-link" <?php if(basename($_SERVER['PHP_SELF']) == 'Signin.php') print 'active'; ?> href="Signin.php" > Sign In</a> </li>

                          </ul>

    }
}
