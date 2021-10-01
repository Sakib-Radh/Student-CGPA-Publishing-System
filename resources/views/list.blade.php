<html>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Roll</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">Address</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->roll}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <!-- <td>{{$item->password}}</td> -->
    </tr>
  @endforeach

  </tbody>
</table>

</html>
