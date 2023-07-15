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
    <td><h2>Easy Learning</h2></td>
    <td><h2>Easy School ERP</h2>
    <p>School Address</p> 
    <p>Phone : 34322334</p>
    <p>Email : support@easylearningbd.com</p>
    </td>
  </tr>
  <tr>

 
</table>


<table id="customer">
  <tr>
    <th width="10%">SL</th>
    <th width="45%">Student Details</th>
    <th width="45%">Student Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Student Name</b></td>
    <td>{{ $details['student']['name'] }}</td>
  </tr>
  
  <tr>
    <td>1</td>
    <td><b>ID No</b></td>
    <td>{{ $details['student']['id_no'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Student Roll</b></td>
    <td>{{ $details->roll }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Father's Name</b></td>
    <td>{{ $details['student']['fname'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Mother's Name</b></td>
    <td>{{ $details['student']['mname'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Mobile No</b></td>
    <td>{{ $details['student']['moblie'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Address</b></td>
    <td>{{ $details['student']['address'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Gender</b></td>
    <td>{{ $details['student']['gender'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Religion</b></td>
    <td>{{ $details['student']['religion'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Date Of Birth</b></td>
    <td>{{ $details['student']['dob'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Discount</b></td>
    <td>{{ $details['discount']['discount'] }} %</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Year</b></td>
    <td>{{ $details['student_year']['name'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Class</b></td>
    <td>{{ $details['student_class']['name'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Group</b></td>
    <td>{{ $details['group']['name'] }}</td>
  </tr>

  <tr>
    <td>1</td>
    <td><b>Shift</b></td>
    <td>{{ $details['shift']['name'] }}</td>
  </tr>
 
</table>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

</body>
</html>