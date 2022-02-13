<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-App</title>
</head>
<body>
    <div style="width:900px;" class="container max-w-full mx-auto pt-4">
    <form action="/posts/{{ $post->id }}" method="POST">
        @method('PUT')

        @csrf
    <div class="mb-3">
     <label class="form-label">Title</label>
     <input type="text" class="form-control" name="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
    <label class="form-label">Content</label>
    <input type="text" class="form-control" name="content" value="{{ $post->content }}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    <button type="submit" class="btn btn-secondary"><a class="text-white text-decoration-none" href="/posts">Cancel</a></button>
    <form action="/posts/{{ $post->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </form>
    </div>
   
</body>
</html>