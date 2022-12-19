<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <style>
    .container {
        box-sizing: border-box;
        width: 100%;
        height: 980px;
        margin : 0px;
      }
      .body{
        margin : 0px;
        position : fixed;
        top : 0px;
        left : 0px;
        right : 0px;
        overflow : hidden;

      }
      *{
        padding : 0px;
        margin : 0px;
        box-sizing: border-box;
      }
      .namelogo{
        background-color: rgb(105, 217, 239);
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
      .menubar1{
        float : right;
        display : block;

      }
      .newsattop{
        background-color: rgb(216, 253, 253);
        color : red;
        height : 30px;
        align-items: center;
        align-content: center;
        padding-top : 5px;
      }

      .nav{
        list-style : none;
        color : purple;
        text-decoration : none;
        padding : 2px;
        font-size : 25px;
        margin-bottom : 20px;

        
      }
      .nav:hover{
        cursor : pointer;
      }
      .heading{
        margin-left : 450px;
        font-size : 40px;
        margin-top : 80px;
        color : rgb(12,55,106);
        margin-bottom : 20px;
      }
      .tablecontainer{
        display : flex;
        flex-direction : coloumn;
        justify-content : space-evenly;
      }
      .head1,.head2{
        margin-bottom : 5px;
        color : purple;
      }

    

      </style>

</head>
<body>
<div class="container">
        <div class="namelogo">
          <img
            class="banklogo"
            ;
            src = "https://www.javatpoint.com/fullformpages/images/sbi.png"

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
          <table class="menubar1">
            <tr>
              <th><a class = "nav" href="Main_page.php">Dashboard</a>|</th>
              <th><a class = "nav" href="assignment2.html">Open A/C</a>|</th>
              <th><a class = "nav" href="www.leetcode.com">Loan</a>|</th>
              <th><a class = "nav"  href ="www.google.com">Deposit</a></th>
            </tr>
          </table></div>
          <div class = "heading">
            <h1 >Dashboard</h1></div>

           <div class = "tablecontainer">
           <div class = "table1">
            <h2 class = "head2"> List of Depositors</h2>
           <?php
include('conn.php');
$sql="select CUSTOMER_NAME, depositor.ACCOUNT_NUMBER,  BALANCE from
depositor inner join account on depositor.ACCOUNT_NUMBER=
account.ACCOUNT_NUMBER"; 
$res=mysqli_query($conn, $sql);
echo '<table border="1"><tr><th>Name</th><th>A/C No.</th><th>
Balance</th><th>Details</th></tr>';
while($result=mysqli_fetch_assoc($res))
{
echo '<tr><td>'. $result['CUSTOMER_NAME'] . '</td><td>'.
$result['ACCOUNT_NUMBER'] . '</td><td>' . $result['BALANCE'] . '</td><td><a
href="Assignment4.php?uid=' . $result['CUSTOMER_NAME'] . ' ">View
Details</a></td></tr>';
}
echo '</table>';
?>
</div>
<div class = "table2">
  <h2 class = "head1">List of Borrowers</h2>
<?php
include('conn.php');
$res = "select CUSTOMER_NAME, account.ACCOUNT_NUMBER, BALANCE from borrower,loan,account WHERE loan.LOAN_NUMBER=borrower.LOAN_NUMBER
AND loan.BRANCH_NAME = account.BRANCH_NAME";
$resb = mysqli_query($conn,$res);
// echo "List of Borrowers";
echo '<table border = "1"><tr><th>Name</th><th>A/C No.</th><th>Balance</th><th>Details</th></tr>';
while($ans = mysqli_fetch_assoc($resb)){
    echo '<tr><td>'. $ans['CUSTOMER_NAME'].'</td><td>'. $ans['ACCOUNT_NUMBER'].'</td><td>'. $ans['BALANCE']. '</td><td><a href = "Assignment4.php?uid = '. $ans['CUSTOMER_NAME'].' ">
    View Details</a></td></tr>';
}
echo '</table>';




?>
</div>
</div>
            

    

    
</body>
</html>