<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Add Student</title>
    <!-- CSS Only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
      body {
        font-family: 'Poppins', sans-serif;
      }
      .form-control::placeholder {
        color: #5bc0de;
      }
      .side-label {
        width: 45px;
      }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col-lg-12">
          <h2 style="color: #0275d8">Add Student</h2>
          @if(Session::has('success'))
            <div class="alert alert-info text-light bg-primary" role="alert">
              {{Session::get('success')}}
            </div>
          @endif
          <form method="post" action="{{url('save-student')}}" enctype="multipart/form-data" autocomplete="off" class="card p-3 border-info mt-3">
            @csrf
            <div class="input-group mb-3">
              <!-- <label class="form-label">Name</label> -->
              <span class="side-label btn border-info bg-light text-info"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control border-info text-primary" name="name" maxlength="40" placeholder="Fullname" required value="{{old('name')}}">
              <!-- @error('name')
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
              @enderror -->
            </div>
            <div class="input-group mb-3">
              <!-- <label class="form-label">Email</label> -->
              <span class="side-label btn border-info bg-light text-info"><i class="fas fa-at"></i></span>
              <input type="text" class="form-control border-info text-primary" name="email" maxlength="40" placeholder="Email" required value="{{old('email')}}" >
              <!-- @error('email')
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
              @enderror -->
            </div>
            <div class="input-group mb-3">
              <!-- <label class="form-label">Phone</label> -->
              <span class="side-label btn border-info bg-light text-info"><i class="fas fa-address-book"></i></i></span>
              <input type="text" class="form-control border-info text-primary" name="phone" maxlength="40" placeholder="Phone Number" required value="{{old('phone')}}">
              <!-- @error('phone')
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
              @enderror -->
            </div>
            <div class="input-group mb-3">
              <!-- <label class="form-label">Address</label> -->
              <span class="side-label btn border-info bg-light text-info"><i class="fas fa-home"></i></span>
              <textarea class="form-control border-info text-primary" name="address" maxlength="500" placeholder="Address" required>{{old('address')}}</textarea>
              <!-- @error('address')
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
              @enderror -->
              </div>
              
              <div class="mt=3" style="width: 100%;">
                <button type="submit" class="btn btn-outline-primary">Add Student</button>
                <a href="{{url('student-list')}}" class="btn btn-warning text-light ms-2" style="width: 50px;"><i class="fas fa-angle-double-right"></i></a>
              </div>
              
          </form>
        </div>
      </div>
    </div>
</body>
</html>