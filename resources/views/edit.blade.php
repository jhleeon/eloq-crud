<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add Post</title>
</head>

<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"><span>Edit Post</span><a href="/index" class="btn btn-secondary">List of Post</a></div>
                        @if(Session::has('post_update'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('post_update')}}
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{route('post.update',['id'=>$post->id])}}" method="POST">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="body">Post Description</label>
                                    <textarea name="body" class="form-control" id="body" rows="3">{{$post->body}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>