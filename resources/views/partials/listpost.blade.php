<div class="post-preview">
    <a href="{{ url('post/'.$item->slug) }}">
        <h2 class="post-title">
            {{ $item->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $item->excerpt }}
        </h3>
    </a>
    <p class="post-meta">Posted by
        <a href="#">{{ $item->author->name }}</a>
        on {{ $item->created_at->format('m, Y') }}</p>
</div>
<hr>
