<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
  <tr>
      
    <td><h2>
      <?php $image_path = '/backend/images/demo-logo.jpg'  ?>
      <img src="{{ public_path() . $image_path }}" width="200" height="100">
    </h2></td>
    <td><h2>Easy School ERP</h2>
    <p>School Address</p> 
    <p>Phone : 34322334</p>
    <p>Email : mraung@cufighter.com</p>
    <p><b>Monthly and Yearly Profit</b></p>
    </td>
  </tr>
  <tr>
    

 
</table>

@php
        $student_fee = App\Models\AccountStudentFee::whereBetween('date',[$start_date,$end_date])->sum('amount');
        $other_cost = App\Models\AccountOtherCost::whereBetween('date',[$sdate,$edate])->sum('amount');
        $emp_salary = App\Models\AccountEmployeeSalary::whereBetween('date',[$start_date,$end_date])->sum('amount');
        $total_cost = $other_cost+$emp_salary;
        $profit = $student_fee - $total_cost;
     

@endphp





<table id="customer">
  <tr>
    <td colspan="2" style="text-align: center;">
        <h4>Reporting Date: {{ date('d M Y', strtotime($sdate)) }} - {{ date('d M Y', strtotime($edate)) }}</h4>
    </td>
  </tr>
  <tr>
    <td width="50%"><h4>Purpose</h4></td>
    <td width="50%"><h4>Amount</h4></td>
    
  </tr>
  
  <tr>
    <td>Student Fee</td>
    <td>{{ $student_fee }}</td>
 
  </tr>
  <tr>
    <td>Employee Salary</td>
    <td>{{ $emp_salary }}</td>
   
  </tr>

  <tr>
    <td>Other Cost</td>
    <td>{{ $other_cost }}</td>
  
  </tr>

  <tr>
    <td>Total Cost</td>
    <td>{{ $total_cost }}</td>
   
  </tr>

  <tr>
    <td>Profit</td>
    <td>{{ $profit }}</td>
   
  </tr>


</table>
<br>
<br>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width:95%; color:#ddd; margin-bottom:50px;" >


</body>
</html>