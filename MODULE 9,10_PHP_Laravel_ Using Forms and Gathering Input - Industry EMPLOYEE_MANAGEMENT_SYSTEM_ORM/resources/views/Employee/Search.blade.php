<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="search">search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">welcome <?php $a=Session::get('username'); echo"{$a}" ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">logout</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-5">
                <form action="{{url('Employee/Search')}}" method="get" enctype="multipart/form-data" style="box-shadow:0 0 10px; padding:10px;">
                    <h1 class="text-center">Search Here</h1>
                    <div class="row mt-3">
                        <div class="col">
                            @csrf
                            <label for="Username">Username :</label>
                            <input type="text" class="form-control" name="username" id="" placeholder="enter username">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="Email">Email :</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="enter email">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-info" value="Search">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>

   <div class="table-responsive">
  <table class="table table-bordered">
    <tr>
    <th>image</th> 	
	<th>username</th>
    <th>email</th>  
    <th>phoneno	</th>  
    <th>gender</th>  
    <th>skill</th>  
    <th>city</th>  
    <th>address</th>
    <th>role</th> 
    <th>Update</th>
    <th>Delete</th> 
    </tr>
    @foreach($search as $row) 	
    <tr>
    <td><img src="/img/{{$row->image}}" height="100px" width="100px"></td>
	<td>{{$row->username}}</td> 
    <td>{{$row->email}}</td> 
    <td>{{$row->phoneno}}</td>  
    <td>{{$row->gender}}</td>  
    <td>{{$row->skill}}</td>  
    <td>{{$row->city}}</td>  
    <td>{{$row->address}}</td>  
    <td>{{$row->role}}</td> 
    <td><a href="{{url('/edit',$row->id)}}" class="btn btn-success">Edit</a></td>
    <td><a href="{{url('/delete',$row->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
    </table>
    </div>
    <div class="pagination">
        {{$search->withQueryString()->links()}}
    </div>
</body>

</html>