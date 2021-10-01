<h1>You are Successfully logged in as admin</h1>

<form action="admincgpa" method="POST">
    @csrf
    <input type="number" placeholder="Enter Roll" name="roll"><br><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
    <input type="number" placeholder="Enter cgpa" name="cgpa"><br>
<!-- <span>@error('username'){{$message}}@enderror</span> -->
    <br>
    <button type="submit">Add</button>

  </form>
