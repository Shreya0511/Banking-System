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
      
        background-color: white;
        width: 100%;
height : 100vh;
  
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
        
        width : 30%;
        height : 300px;
        
        margin : auto;
        font-size : 25px;
        justify-content : space-around;
        color : black;
       
        display : flex;
        flex-direction : column;
        align-items : center;
        transition : all;
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
              <th><a class = "kuch";href="www.google.com">Dashboard</a>|</th>
              <th><a class = "kuch";href="www.geeksforgeeks.com">Open A/C</a>|</th>
              <th><a class = "kuch";href="www.leetcode.com">Loan</a>|</th>
              <th><a class = "kuch"; href ="www.google.com">Deposit</a></th>
            </tr>
          </table></div>
          <h1 class = "ac">ACCOUNT OPENING DETAILS</h1>
          <form>
          <?php
        include('conn.php');
        if (isset($_GET['uid'])) {
            $result = $_GET['uid'];
            $sqli = "SELECT CUSTOMER_NAME, CUSTOMER_STREET , CUSTOMER_CITY
            FROM customer 
            WHERE CUSTOMER_NAME ='$result'";
            $res1 = mysqli_query($conn, $sqli);
            $result1 = mysqli_fetch_assoc($res1);
            echo "Customer Name  : ";
            echo $result1['CUSTOMER_NAME'] . '<br>' . '<br>';

            echo "Address  : ";
            echo $result1['CUSTOMER_STREET'] . '<br>' . '<br>';

            echo "City : ";
            echo $result1['CUSTOMER_CITY'] . '<br>'. '<br>';
        }
?>
          </form>

</body>
</html>
