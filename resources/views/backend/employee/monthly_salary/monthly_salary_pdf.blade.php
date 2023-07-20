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
    </td>
  </tr>
  <tr>
    

 
</table>

@php

$date = date('Y-m',strtotime($details['0']->date));
        
        if ($date !='') {
            $where[] = ['date','like',$date.'%'];
        }

$totalattend = App\Models\EmployeeAttendance::with(['user'])->where($where)->where('employee_id',$details['0']->employee_id)->get();

$salary = (float)$details['0']['user']['salary'];
            $salaryperday = (float)$salary/30;
            $absentcount = count($totalattend->where('attend_status','Absent'));
            $totalsalaryminus =(float)$absentcount*(float)$salaryperday;
            $totalsalary = (float)$salary-(float)$totalsalaryminus;


@endphp


<table id="customer">
  <tr>
    <th width="10%">SL</th>
    <th width="45%">Employee Details</th>
    <th width="45%">Employee Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Employee Name</b></td>
    <td>{{ $details['0']['user']['name'] }}</td>
  </tr>
  
  <tr>
    <td>2</td>
    <td><b>Basic Salary</b></td>
    <td>{{ $details['0']['user']['salary'] }}</td>
  </tr>
  <tr>
    <td>3</td>
    <td><b>Total Absent For This Month</b></td>
    <td>{{ $absentcount }}</td>
  </tr>

  <tr>
    <td>4</td>
    <td><b>Month</b></td>
    <td>{{ date('M Y',strtotime($details['0']->date))  }}</td>
  </tr>

  <tr>
    <td>5</td>
    <td><b>Salary This Month</b></td>
    <td>{{ $totalsalary }}</td>
  </tr>


</table>
<br>
<br>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width:95%; color:#ddd; margin-bottom:50px;" >



<table id="customer">
  <tr>
    <th width="10%">SL</th>
    <th width="45%">Employee Details</th>
    <th width="45%">Employee Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Employee Name</b></td>
    <td>{{ $details['0']['user']['name'] }}</td>
  </tr>
  
  <tr>
    <td>2</td>
    <td><b>Basic Salary</b></td>
    <td>{{ $details['0']['user']['salary'] }}</td>
  </tr>
  <tr>
    <td>3</td>
    <td><b>Total Absent For This Month</b></td>
    <td>{{ $absentcount }}</td>
  </tr>

  <tr>
    <td>4</td>
    <td><b>Month</b></td>
    <td>{{ date('M Y',strtotime($details['0']->date))  }}</td>
  </tr>

  <tr>
    <td>5</td>
    <td><b>Salary This Month</b></td>
    <td>{{ $totalsalary }}</td>
  </tr>


</table>
<br>
<br>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width:95%; color:#ddd; margin-bottom:50px;" >


</body>
</html>