<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- front awsome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    body{
       padding: 100px;
    }
    </style>
</head>
<body>
  
   <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h5 class="mb-3">Post List

        <a href="{{url('/posts/create') }}">
        <button type="button" class="btn btn-info btn-sm float-end">
        <i class="fa-solid fa-circle-plus"></i>
           Add New
          </button>
        </a>
        
        </h5>
       @if(Session('successAlert'))
        <div class="alert alert-success alert-dismissable show fade" role="alert">
          <strong>{{ Session('successAlert') }}</strong>
          <button class="close" data-dismiss="alert">&times;</button>
        </div>
       @endif
      <table class="table table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>
       
      <fORM>
       
  </FORM action="{{ url('posts/'.$post->id) }}" method="POST">
  @csrf
  @method('DELETE')
      <a href="{{ url('posts/'.$post->id.'/edit') }}">
          <button type="button" class="btn btn-success btn-sm">
          <i class="fa-solid fa-pen-to-square"></i>
          Edit</button>
      </a>

      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to delete?" >
      <i class="fa-solid fa-trash"></i>
      Delete</button>
      </FORM>

      </td>
    </tr>
  
    @endforeach
    
  </tbody>
</table>
{{ $posts->links() }}
      </div>
      <div class="col-md-2"></div>
    </div>
   </div>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
</body>
</html>
         
  