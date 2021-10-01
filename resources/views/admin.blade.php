<h1>Admin Login</h1>
<!-- @if($errors->any())
@foreach($errors->all() as $err)
  <li>{{$err}}</li>
  @endforeach
  @endif -->
<form action="adminauthen" method="POST">
    @csrf
    <input type="number" placeholder="Enter ID" name="roll"><br><br>

    <input type="password" placeholder="Enter password" name="password"><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
    <br>
    <button type="submit">Login</button>

  </form>
