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
                    @method('PUT')
                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                    </div>
                    <div class="mb-3">
                      <label for="city" class="form-label">city</label>
                      <input type="text" class="form-control" id="city" name="city" value="{{$student->city}}">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">marks</label>
                        <input type="number" class="form-control" id="marks" name="marks" value="{{$student->marks}}">
                      </div>
                    <button type="submit" class="btn btn-primary">update</button>
                  </form>
            </div>
        </div>
    </div>