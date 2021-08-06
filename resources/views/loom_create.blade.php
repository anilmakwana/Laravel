<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="container">

 	    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">post</th>
      <th scope="col">image</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  <tbody>

      @foreach($loomarr as $loom)

    <tr>
      <td>{{$loom->id}}</td>
      <td>{{$loom->name}}</td>
      <td>{{$loom->email}}</td>
      <td>{{$loom->post}}</td>
      <td><img src="{{asset('storage/highlights/'.$loom->image)}}" width="100px" height="100px"></td>
      <td><a href="{{route('edit',$loom->id)}}" class="btn btn-success">edit</a></td>
    </tr>
    @endforeach
   /tbody>
</table>

</div>
</body>
</html>