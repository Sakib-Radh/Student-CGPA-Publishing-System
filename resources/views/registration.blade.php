<h1>User Login</h1>
<!-- @if($errors->any())
@foreach($errors->all() as $err)
  <li>{{$err}}</li>
  @endforeach
  @endif -->
<form action="list" method="POST">
    @csrf
    <input type="number" placeholder="Enter Roll" name="roll"><br><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
<input type="text" placeholder="Enter Name" name="name"><br><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
    <input type="email" placeholder="Enter Email" name="email"><br><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
    <br>
    <input type="password" placeholder="Enter password" name="password"><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
    <br>
    <button type="submit">Login</button>

  </form>
