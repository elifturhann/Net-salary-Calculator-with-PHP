 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP</title>
<style>
  body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
   justify-content: center;
  }
  h2{
    text-align: center;
  }
  table{
    margin-left: auto;
    margin-right: auto;
  }
    
</style>
</head>
<body>
<form method="post" autofocus="autofocus" autocomplete="on">
  <h2>PHP Program To find the gross salary of an Employee</h2>
<table border="1" >
<tr>
  <th>First name:</th>
<td>
<input type="text" name="first_name" 
</td>
</tr>

<tr>
  <th>Last name:</th>
<td>
<input type="text" name="last_name" 
</td>
</tr>

<tr>
  <th>Profession:</th>
<td>
<input type="text" name="profession"  required>
</td>
</tr>

<tr>
  <th>Gross salary:</th>
<td>
<input type="number" name="gross_salary" required>
</td>
</tr>

<tr>
  <th>Tax rate:</th>
<td>
<input type="number" name="tax_rate" required>
</td>
</tr>

<tr>
<td colspan="3">
<input type="submit" name="calculate" value="Calculate" float="right">
</td>
</tr>
</table>
</form>
<br>
<?php

if(isset($_POST['calculate']))
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$profession = $_POST['profession'];
$gross_salary = $_POST['gross_salary'];
$tax_rate = $_POST['tax_rate']/100;
$paid_tax = $gross_salary * $tax_rate;
//To Compute the net Salary
$net_salary = $gross_salary - ($gross_salary * $tax_rate);
echo "Summary of Data :"."<br><br>";
echo "First Name :" .$first_name."<br>";
echo "Last Name : ".$last_name."<br>";
echo "Profession :".$profession."<br>";
echo "Gross Salary :".$gross_salary."€"."<br>";
echo "Tax Rate : ".$tax_rate * 100 ."%"."<br>";
echo "Paid Tax : ".$paid_tax."€"."<br>";
echo "Net Salary : ".$net_salary."€";

}
?>
</body>
</html>