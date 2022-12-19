<?php
#include<conn.php>;?>
<html>
    <head>
        <title>
            Account opening</title>
            <style>
      html {
        scroll-behavior: smooth;
      }
      .body {
        margin: 0px;
        position: fixed;
        top: 0px;
        left: 0px;
        right: 0px;
        overflow: hidden;
      }
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

            .container {
        box-sizing: border-box;
        background-color : white;

        width: 100%;
        height: 100vh;
        margin : 0px;
      }
      .namelogo{
        background-color: rgb(12,55,106);
        display : flex;
        flex-direction : row;
      }
      .banklogo{
        width : 100px;
        padding : 15px;
        justify-content : left;
      }
      .bankname{
        align-items : center;
        margin : auto;
        font-size : 40px;
        color : white;
        
      }
      .menubar{
        float : right;

      }
      fname{
        color : purple;
        font-size : 30px;
      }

      .kuch{
        list-style : none;
        color : purple;
        text-decoration : none;
        padding : 2px;
        font-size : 20px;
      }
      .ac{
        color : purple;
        padding : 50px;
        text-align: center;

      }
      .newsattop{
        background-color: rgb(216, 253, 253);
        color : red;
        height : 30px;
        align-items: center;
        align-content: center;
        padding-top : 5px;
        



      }

      form{
        /* border : 2px solid rgb(37, 198, 227); */
        width : 30%;
        height : 300px;
        margin : auto;
        /* background-color: rgb(185, 245, 247); */
        display : flex;

        flex-direction : column;
        align-items : center;
        justify-content : center;
        transition : all;
font-size : 25px;S
color : black;
background-color:  rgb(245, 236, 252);
        box-shadow: rgba(0, 0, 0, 0.20) 0px 3px 8px;

        
      }


      </style>

</head>
<body>
<div class="container">
        <div class="namelogo">
          <img
            class="banklogo"
            ;        src = "https://www.javatpoint.com/fullformpages/images/sbi.png"

            ;align="left"
            ;
            alt="bank is here"
          />
          <h1 class="bankname">State Bank of India</h1>
        </div>
        <div>
      <marquee class = "newsattop"; direction = "left">Lorem, ipsum dolor sit amet consectetur 
        adipisicing elit. Fuga autem ratione ea voluptas accusantium, repellat illum 
        ipsa labore dolores, nemo id recusandae mollitia.</marquee>
      </div>

        <div class="menubar">
          <table class="menubar">
            <tr>
              <!-- <th><a class = "kuch";href="www.google.com">Dashboard</a>|</th>
              <th><a class = "kuch";href="www.geeksforgeeks.com">Open A/C</a>|</th>
              <th><a class = "kuch";href="www.leetcode.com">Loan</a>|</th>
              <th><a class = "kuch"; href ="www.google.com">Deposit</a></th> -->
              <th><a class = "kuch";href="www.google.com">Home</a>|</th>
          <th><a class = "kuch";href="www.geeksforgeeks.com">About Us</a>|</th>
          <th><a class = "kuch";href="www.leetcode.com">Log in</a></th>

            </tr>
          </table></div>
          <h1 class = "ac">LOGIN DETAILS</h1>
          <form>
          <?php

          echo "Username : ".$_POST["fname"]."<br>";
          echo "Password : ".$_POST["pw"]."<br>";
          $DB_USERNAME="root";
$DB_PASS="";
$DB_HOSTNAME="localhost";
$DB_NAME = "21bcs195";
$conn=mysqli_connect($DB_HOSTNAME,$DB_USERNAME,$DB_PASS,$DB_NAME) or die('DATABASE CONNECTION ERROR');
          
          ?>
          </form>

</body>
</html>
