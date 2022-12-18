<div> 
    <div class="row">
        <div class="col-md-8">
            <h3>{{$post->post}}</h3> 
        </div>
        <div class="col-md-4">
            <a href="/add-comment/{{$post->id}}" class="btn btn-primary">Add Comment</a>
        </div>
    </div>
        <br>    
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Author</th>
            <th>Comments</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
              <tr>
                <td>{{$comment->user->name}}</td>
                <td>{{$comment->comment}}</td>
                <td><a class="btn btn-primary"  href="/edit-comment/{{$comment->id}}">Edit</a></td>
                <td><a class="btn btn-danger delete" data-function-name="deleteComment" data-id="{{$comment->id}}">Delete</a></td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
