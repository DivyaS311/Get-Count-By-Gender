<!DOCTYPE html>
<html>
<head>
	<title>ping</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h3>Posts</h3>

		<table class="table table-dark table-striped table-hover table-justify" width="100%" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Gender Count</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($sorts as $sort)
    <tr>
      <th scope="row">{{$sort->id}}</th>
      <td>{{$sort->gender}}</td>
      <td>{{$sort->firstname}}</td>
      <td>{{$sorts->count() }}</td>
    </tr>
    @endforeach
  	@foreach($pings as $ping)
    <tr>
      <th scope="row">{{$sort->id}}</th>
      <td>{{$ping->gender}}</td>
      <td>{{$ping->firstname}}</td>
      <td>{{$pings->count() }}</td>
    </tr>
    @endforeach
 
  </tbody>
</table>
		 
		</table>
		
	  
	  

</body>
</html>