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


<table id="customer">
  <tr>
    <th width="10%">SL</th>
    <th width="45%">Student Details</th>
    <th width="45%">Student Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Student Name</b></td>
    <td>{{ $details->name }}</td>
  </tr>
  
  <tr>
    <td>2</td>
    <td><b>ID No</b></td>
    <td>{{ $details->id_no }}</td>
  </tr>



  <tr>
    <td>3</td>
    <td><b>Father's Name</b></td>
    <td>{{ $details->fname }}</td>
  </tr>

  <tr>
    <td>4</td>
    <td><b>Mother's Name</b></td>
    <td>{{ $details->mname }}</td>
  </tr>

  <tr>
    <td>5</td>
    <td><b>Mobile No</b></td>
    <td>{{ $details->moblie }}</td>
  </tr>

  <tr>
    <td>6</td>
    <td><b>Address</b></td>
    <td>{{ $details->address }}</td>
  </tr>

  <tr>
    <td>7</td>
    <td><b>Gender</b></td>
    <td>{{ $details->gender }}</td>
  </tr>

  <tr>
    <td>8</td>
    <td><b>Religion</b></td>
    <td>{{ $details->religion }}</td>
  </tr>

  <tr>
    <td>9</td>
    <td><b>Date Of Birth</b></td>
    <td>{{ date('d-m-Y',strtotime($details->dob))  }}</td>
  </tr>

  <tr>
    <td>10</td>
    <td><b>Designation</b></td>
    <td>{{ $details['designation']['name'] }} %</td>
  </tr>

  <tr>
    <td>11</td>
    <td><b>Join Date</b></td>
    <td>{{  date('d-m-Y',strtotime($details->join_date)) }}</td>
  </tr>

  <tr>
    <td>12</td>
    <td><b>Salary</b></td>
    <td>{{ $details->salary }}</td>
  </tr>

 
 
</table>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

</body>
</html>