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
    <p><b>Employee Attendance Report</b></p>
    </td>
  </tr>
  <tr>
    

 
</table>

<strong>Employee Name: </strong> {{ $allData['0']['user']['name'] }} ,
<strong>ID No: </strong> {{ $allData['0']['user']['id_no'] }} ,
<strong> Month : </strong> {{ $month }} ,

<table id="customer">
  
<tr>
    <td width="50%"><h4>Date</h4></td>
    <td width="50%"><h4>Attend Status</h4></td>
   
    
  </tr>

  @foreach($allData as $value)
<tr>
    <td width="50%">{{ date('d-m-Y',strtotime($value->date)) }}</td>
    <td width="50%">{{ $value->attend_status}}</td>
    <td></td>
    
  </tr>
  @endforeach

  <tr>
        <td colspan="2">
            <strong>Total Absent : </strong>{{ $absents }}, <strong> Total Leave : </strong>{{ $leaves }}
        </td>
  </tr>
  

</table>
<br>
<br>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width:95%; color:#ddd; margin-bottom:50px;" >



</body>
</html>