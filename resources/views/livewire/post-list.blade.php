<div>          
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Author</th>
            <th>Post</th>
            <th>Comments</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
              <tr>
                <td>{{$post->user->name}}</td>
                <td>{{$post->post}}</td>
                <td><a class="btn btn-default" href="/comment-list/{{$post->id}}">Comments</a></td>
                <td><a class="btn btn-primary"  href="/edit-post/{{$post->id}}">Edit</a></td>
                <td><a class="btn btn-danger delete" data-function-name="deletePost" data-id="{{$post->id}}">Delete</a></td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
