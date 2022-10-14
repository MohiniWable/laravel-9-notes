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

  <div class="row">
   
 <div class="col-6 mx-auto my-3">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Create A New Note</h2>
            <form action="/note/store" method="POST">
                @csrf
                <input type="text" name="note_title" id="" class="form-control my-2" placeholder="Note title">
                <input type="date" name="note_date" id="" class="form-control my-2" placeholder="Note Date">
                <textarea name="note_description" id="" cols="10" rows="5" class="form-control my-3" placeholder="Note desciption...."></textarea>
                <button type="submit" class="btn btn-primary">Create Note</button>
            </form>
        </div>
    </div>

 </div>
  </div>
  <!-- Row ends here -->
</div>
      <!-- container ends -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>