<div class="container section">
    <form class="form" action="{{ route('posts.submit') }}" method="post">
        {{ csrf_field() }}
        @if(!empty($post))
            <input type="hidden" name="id" id="id" value='{{ $post->id }}'>
        @endif
        <div class="field">
            <label for="title" class="label"
@           @if(!empty($post))
                   value="{{ $post->title }}"
            @endif>Title</label>
            <div class="control">
                <input type="text" class="input" name="title" id="title">
            </div>
        </div>
        <div class="field">
            <label for="body" class="label">Body</label>
            <div class="control">
                <textarea class="textarea" placeholder="Textarea" name="body" id="body"
                @if(!empty($post))
                    value="{{ $post->body }}"
                @endif
                ></textarea>
            </div>
        </div>
        <button class="button" type="submit">Submit</button>
    </form>
</div>
