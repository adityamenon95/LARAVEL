<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-5">
                <form action="/updateid/<?php echo $edit[0]->id?>" method="post" enctype="multipart/form-data" style="box-shadow:0 0 10px; padding:10px;">
                    <h1 class="text-center">Update Here</h1>
                    <div class="row mt-3">
                        <div class="col">
                            @csrf
                            @method('PUT')
                            <label for="ProfilePic">ProfilePic :</label>
                            <input type="file" class="form-control" name="image" id="" >
                        </div>
                    </div>
                    @error('image')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <label for="Username">Username :</label>
                            <input type="text" class="form-control" name="username" id="" placeholder="enter username" value="<?php echo $edit[0]->username?>">
                        </div>
                    </div>
                    @error('username')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="enter email"value="<?php echo $edit[0]->email?>">
                        </div>
                    </div>
                    @error('email')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <label for="PhoneNo">PhoneNo:</label>
                            <input type="PhoneNo" class="form-control" name="phoneno" id="" placeholder="enter phoneno"value="<?php echo $edit[0]->phoneno?>">
                        </div>
                    </div>
                    @error('phoneno')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <label for="gender">Gender:</label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="form-check-input" value="male">male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="form-check-input" value="female">female
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('gender')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <label for="skill">skill:</label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name=skill[] class="form-check-input" value="php">PHP
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name=skill[]  class="form-check-input" value="phython">Phython
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name=skill[] class="form-check-input" value="html">html
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name=skill[] class="form-check-input" value="css">css
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name=skill[] class="form-check-input" value="javascript">javascript
                                </label>
                            </div>
                        </div>
                    </div>
                    @error('skill')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="City">City:</label>
                                <select class="form-control"  name="city"  placeholder="enter city" id="city">
                                    <option>ahmedabad</option>
                                    <option>rajkot</option>
                                    <option>surat</option>
                                    <option>anand</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    @error('city')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                    <div class="row mt-3">
                        <div class="col">
                            <label for="Address">Address:</label>
                            <textarea name="address" id="" class="form-control" placeholder="enter address" cols="5" rows="5"><?php echo $edit[0]->address?></textarea>
                        </div>
                    </div>
                    @error('address')
                    <div class="text-danger">
                    {{$message}}
                    </div>
                    @enderror
                     <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit"  class="btn btn-success" value="update">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
</body>

</html>