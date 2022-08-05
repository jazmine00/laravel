<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title></title>
    <!-- CSS Only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
      body {
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body>
    <div class="container-fluid" style="margin-top: 20px;">
      <div class="row">
        <div class="col-lg-12">
          <h1 style="color: #0275d8"></h1>
          <p style="color: #0275d8"></p>
          
          <div style="margin-bottom: 10px">
            <a href="{{url('add-student')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i>&nbsp;Add Student</a>
          </div>
          @if(Session::has('success'))
            <div class="alert alert-info text-light bg-primary" role="alert">
              {{Session::get('success')}}
            </div>
          @endif
          <table class="table table-hover table-info table-responsive text-primary mt-4" style="text-align: center; font-size: 16px;">
            <thead class="table-warning text-primary">
              <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 12%;">Name</th>
                <th style="width: 12%;">Email</th>
                <th style="width: 15%;">Phone</th>
                <th style="width: 31%;">&nbsp;&nbsp;Address&nbsp;&nbsp;</th>
                <th colspan="2" style="width: 10%;">Actions</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i = 1;
              @endphp
              @foreach ($data as $stu)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$stu->name}}</td>
                  <td>{{$stu->email}}</td>
                  <td>{{$stu->phone}}</td>
                  <td>{{$stu->address}}</td>
                  <td>
                    <a href="{{url('edit-student/'.$stu->id)}}" class="btn btn-info text-light"><i class="fas fa-pen"></i>
                    </a>
                  </td>
                  <td>
                    <a href="{{url('delete-student/'.$stu->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>