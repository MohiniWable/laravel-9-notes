<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel notes app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
<div class="container">
  <h1 class="fw-bold display-3 text-center my-4">Laravel Notes App</h1>
  <a href="/new-note" class="btn btn-primary mb-3">Create New Note</a>

@if(Session::has("msg"))
<div class="alert alert-success">
{{Session()->get("msg")}}
</div>
@endif

  <div class="row">
    @foreach($notes as $note)
    <div class="col-12 col-sm-6 col-md-4 mx-auto my-3">
      <div class="card">
        <div class="card-body text-center">
          <div class="card-title fw-bold">{{$note->note_title}}</div>
          <small class="text-muted">{{$note->note_date}}</small>
          <p>{{$note->note_description}}</p>
          <a href="/note/edit/{{$note->id}}" class="btn btn-success">Edit</a>
          <a href="/note/show/{{$note->id}}" class="btn btn-primary">View</a>
          <a href="/note/delete/{{$note->id}}" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>

  @endforeach

    <!-- columns ends here -->
  </div>  <!-- Row ends here -->
</div>
      <!-- container ends -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>