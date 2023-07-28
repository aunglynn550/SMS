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
    <p><b>Student Result Report</b></p>
    </td>
  </tr>
  <tr>
    

 
</table>
<br><br>
<strong>Result Of : </strong> {{ $allData['0']['exam_type']['name'] }} 
<br><br>
<table id="customer">
  
<tr>
    <td width="50%"><h4>Year / Session :</h4>{{ $allData['0']['year']['name'] }} </td>
    <td width="50%"><h4>Class:</h4>{{ $allData['0']['student_class']['name'] }}</td>
   
    
  </tr>
</table>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width:95%; color:#ddd; margin-bottom:50px;" >



</body>
</html>