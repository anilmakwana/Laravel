<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
			<div class="container">
<form action="{{route('update')}}"  method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>name</label>
    <input type="text" name="name"class="form-control" value="{{$loom->name}}" placeholder="Enter name">
  </div> 
      
    <div class="form-group"> 
    <label>email</label>
    <input type="email" name="email" class="form-control" value="{{$loom->email}}" placeholder="Enter email">
    </div>

    <div class="form-group">
    <label>post</label>
    <input type="text" name="post" class="form-control" value="{{$loom->post}}" placeholder="Enter post">
    </div>

     <div class="form-group">
    <label for="exampleFormControlFile1">inamge</label>
    <input type="file" name="image" class="form-control-file" value="{{$loom->image}}" id="exampleFormControlFile1">
  </div>
    </div>
    <div class="form-group"> 
  <button type="submit" name="submit" class="btn btn-primary">upadte</button>
</div>
</form>
</div>




	

</body>
</html>