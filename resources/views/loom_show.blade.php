<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
{{session('msg')}}
</head>
<body>
	<div class="container">
<form action="{{route('store')}}"  method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>name</label>
    <input type="text" name="name"class="form-control" placeholder="Enter name">
  </div> 
      
    <div class="form-group"> 
    <label>email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
    </div>

    <div class="form-group">
    <label>post</label>
    <input type="text" name="post" class="form-control" placeholder="Enter post">
    </div>

     <div class="form-group">
    <label for="exampleFormControlFile1">inamge</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>
    </div>
    <div class="form-group"> 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</body>
</html>