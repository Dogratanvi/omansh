
@foreach ($comments as $comment)
  
    <div class="display-comment" @if ($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user_name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ url('comments') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="blog_id" value="{{ $blog_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Reply" />
            </div>
            <hr />
            <hr />
            <div class="py-10 px-20">
                <h4>Display Comments</h4>
                @include('frontend.block.comments', [
                    'comments' => $blogs->comments,
                    'blog_id' => $blogs->id,
                ])
                <hr />
           
            </div>
    </div>
    </div>
    </form>

    @if ($comment->replies != null)
        @include('frontend.block.comments', ['comments' => $comment->replies])
    @endif
    @endforeach
