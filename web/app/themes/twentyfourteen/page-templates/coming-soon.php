<?php

/**
 * Template Name: Coming Soon
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bethani Professional</title>
  <style>
    .content-area {
      height: 100vh;
      width: 100%;
      text-align: center;
    }

    .d-flex {
      display: flex;
    }

    .align-items-center {
      align-items: center;
    }

    .justify-content-center {
      justify-content: center;
    }

    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fade-in {
      opacity: 0;
      -webkit-animation: fadeIn ease-in 1;
      -moz-animation: fadeIn ease-in 1;
      animation: fadeIn ease-in 1;
      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      -webkit-animation-duration: 1s;
      -moz-animation-duration: 1s;
      animation-duration: 1s;
    }

    .fade-in.one {
      -webkit-animation-delay: 0.7s;
      -moz-animation-delay: 0.7s;
      animation-delay: 0.7s;
    }

    .fade-in.two {
      -webkit-animation-delay: 1.2s;
      -moz-animation-delay: 1.2s;
      animation-delay: 1.2s;
    }

    .fade-in.three {
      -webkit-animation-delay: 1.7s;
      -moz-animation-delay: 1.7s;
      animation-delay: 1.7s;
    }

    .logo {
      max-width: 480px;
      width: 80%;
      display: block;
      margin: 0 auto;
    }

    h3 {
      font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
        "Courier New", monospace;
      letter-spacing: 5px;
      text-transform: uppercase;
      font-weight: 400;
      color: #fff;
      ;
    }

    .social ul {
      list-style-type: none;
      padding: 0;
    }

    .social ul li {
      display: inline-block;
      margin: 5px;
    }

    .social ul li a img {
      width: 28px;
    }

    .social ul li a img:hover {
      opacity: 0.7;
    }

    .copy-right {
      position: absolute;
      bottom: 0;
      right: 0;
      left: 0;
      text-align: center;
      padding-bottom: 15px;
      font-size: 12px;
      color: #fff;
    }
  </style>
</head>

<body style="background: linear-gradient(188deg, rgba(0,0,0,1) 0%, rgba(10,31,56,1) 100%);">
  <div class="content-area d-flex align-items-center justify-content-center">
    <div>
      <img src="https://b-pro.wit.id/demo/assets/img/logo-white.png" alt="" class="logo fade-in one" />
      <h3 class="fade-in two">Coming Soon</h3>
    </div>
  </div>
  <div class="copy-right">
    © 2024, Bethany Professional All Rights Reserved
  </div>
</body>

</html>