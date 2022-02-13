<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-App</title>
</head>
<body>
    <div style="width:900px;" class="container max-w-full mx-auto pt-4">

    <h1 class="text-4xl font-bold mb-4">My blog</h1>
    <button class="bg-blue-500 tracking-wide px-6 py-2 inline-block mb-6"><a class="text-white text-decoration-none" href="/posts/create">New-Post</a></button>
    @foreach($posts as $post)
       <article class="mb-4">
         <p class="text-xl font-bold text-blue-500">{{ $post->title }}</p>
         <p class="text-md gray text-gray-800"> {{ $post->content }} </p>  
         <button class="bg-orange-500 tracking-wide px-6 py-2 inline-block mb-6"><a class="text-white text-decoration-none" href="/posts/{{$post->id}}/edit">Update</a></button>
       </article>     
    @endforeach
      
    </div>

   
</body>
</html>