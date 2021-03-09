
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>


      <title>Hello, world!</title>
    </head>
    <body>
        @if (session('status'))
        <div class="alert alert-success">
        {{  session('status') }}
        </div>
        @endif


        @if (session('status1'))
        <div class="alert alert-danger">
        {{  session('status1') }}
        </div>
        @endif
        <div class="container">
            <h1>All Data </h1>
            <br>

<table id="example"  class="table">
    <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Experience</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
@foreach ($data as $item)

<tr>
     <td >{{ $loop->index + 1 }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->age }}</td>
    <td>{{ $item->experience }}</td>
    <td>{{ $item->type }}</td>

</tr>
@endforeach

    </tbody>
</table>

        </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


      <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
      //  $('#table').DataTable({
      //       responsive: true
      //       , language: {
      //           searchPlaceholder: 'Search...'
      //           , sSearch: ''
      //           , lengthMenu: '_MENU_ items/page'
      //       , }
      //   });

        $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
