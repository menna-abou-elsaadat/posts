<div>          
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Author</th>
            <th>Post</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
              <tr>
                <td>{{$post->user->name}}</td>
                <td>{{$post->post}}</td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
