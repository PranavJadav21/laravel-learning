<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>

    {{-- display all error --}}
    {{-- @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $message)
          <li>{{$message}}</li>
        @endforeach
      </ul>
    @endif --}}

    
    {{-- @if ($errors->any())
      <ul>
        @foreach ($errors->get('email') as $message)
          <li>{{$message}}</li>
        @endforeach
      </ul>
    @endif --}}

    {{-- custom error message--}}
    {{-- @if ($errors->has('email'))
      <h2>Email me error he</h2>
    @endif --}}

    <form action="" method="POST">
        @csrf
        Name:<input type="text" name="name1" id="name"><br><br>
        @if ($errors->any())
         <ul>
          @foreach ($errors->get('name1') as $message)
           <li>{{$message}}</li>
          @endforeach
         </ul>
        @endif
        Email:<input type="email" name="email" id="email"><br>
        @if ($errors->any())
         <ul>
          @foreach ($errors->get('email') as $message)
           <li>{{$message}}</li>
          @endforeach
         </ul>
        @endif
         {{-- custom error message--}}
        {{-- @if ($errors->has('email'))
          <h2>Email me error he</h2>
        @endif --}}
        <br>
        Password:<input type="password" name="password" id="password"><br>
        @if ($errors->any())
         <ul>
          @foreach ($errors->get('password') as $message)
           <li>{{$message}}</li>
          @endforeach
         </ul>
        @endif
        <br>
        <input type="submit" value="Submit">
    </form>

    @if (isset($data))
      @foreach ($data as $item) 
        {{$item}}
      @endforeach
    @endif
        


    

    {{--
        using this not redirect olddata page and when click on submit data but one field is missing to fill so that time remaining field are not empty but when you refresh the page form data clear 
    --}}


    {{-- <form action="" method="POST">
        @csrf
        Name:<input type="text" name="name1" id="name" value="{{old('name1')}}"><br><br>
        Email:<input type="email" name="email" id="email" value="{{old('email')}}"><br><br>
        Password:<input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
        <input type="submit" value="Submit">
    </form> --}}
    
    
</body>
</html>