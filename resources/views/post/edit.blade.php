<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create post</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
<style>
    body{
       padding: 100px;
    }
    </style>
</head>
<body>
        <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3>Update Post</h3>
                        <FORM action="{{ url('posts/'.$post->id) }}" method="POST">
                            <!-- {{ csrf_field() }} -->
                            @csrf
                            @method('PUT')
                            <div class="form-outline mb-4">
                            <input type="text" name="title" id="form1Example1" class="form-control @error ('title') is-invalid @enderror" value="{{ $post->title ?? old('title') }}" />
                            <label class="form-label" for="form1Example1" >Title</label>
                            @error ('title')
                            <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <textarea name="content" class="form-control @error ('content') is-invalid @enderror" id="textAreaExample" rows="4"> {{ $post->content ?? old('content') }}</textarea>
                            <label class="form-label" for="textAreaExample">Content</label>
                           
                                @error ('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                               
                        <button type="submit" class="btn btn-info btn-block rounded-0">Update</button>

        </FORM>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>


      <!-- MDB -->
      <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
</body>
</html>