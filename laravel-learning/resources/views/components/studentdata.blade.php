<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap adding --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CURD Query Builder</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="mb-3">
                      <label for="city" class="form-label">city</label>
                      <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">marks</label>
                        <input type="number" class="form-control" id="marks" name="marks">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-sm-6">
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">marks</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($students as $stu)
                          <tr>
                            <th>{{$stu->id}}</th>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->city}}</td>
                            <td>{{$stu->marks}}</td>
                            <td>
                                <a href="{{url('/edit', $stu->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url('/delete', $stu->id) }}" class="btn btn-info btn-sm">Delete</a>
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