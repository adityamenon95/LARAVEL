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
    <div class="container">
        <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-5">
        <form action="" method="post" style="box-shadow: 0 0 10px; padding: 15px;">
        <h1 class="text-center">Blog</h1>
        <div class="row mt-3">
            <div class="col">
          @csrf
           <label for="Name">Title:</label>
           <input type="text" class="form-control" name="title"  placeholder="enter title" id="">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
            <label for="Description">Description:</label>
            <textarea name="description"  class="form-control"  placeholder="enter description" id="" cols="5" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
            <input type="submit" class="btn btn-primary" value="submit">
            </div>
        </div>
        </form>
        </div>
        <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>