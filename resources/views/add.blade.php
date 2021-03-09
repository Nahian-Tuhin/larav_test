
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            <h1>Form Data </h1>
            <br>
        <form action="{{ route('add_data') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
              @error ('name')
              <div class="text-danger">
                  {{ $message }}
              </div>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              @error ('email')
              <div class="text-danger">
                  {{ $message }}
              </div>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Age</label>
              <input type="number" min="0" class="form-control" name="age"  placeholder="Enter Age">
              @error ('age')
              <div class="text-danger">
                  {{ $message }}
              </div>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Experience</label>
              <input type="number" class="form-control" name="experience" placeholder="Enter Experience">
              @error ('experience')
              <div class="text-danger">
                  {{ $message }}
              </div>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Type</label>
              <input type="text" class="form-control" name="type" placeholder="Enter Type">
              @error ('type')
              <div class="text-danger">
                  {{ $message }}
              </div>
          @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
          <a href="{{ route('show') }}"><button>Show All</button></a>
        </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
  </html>
