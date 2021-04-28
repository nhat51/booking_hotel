<!-- recent single post -->
@foreach($recentPost as $recent)
<div class="recent-single-post mb-20">
    <div class="post-img"> <a href="{{ route('blog.blog-detail', $recent) }}"><img src="front/img/blog/{{ $recent->image }}" alt=""></a> </div>
    <div class="pst-content">
        <p><a href="{{ route('blog.blog-detail', $recent) }}">{{ \Illuminate\Support\Str::limit($recent->title, 50) }}</a></p>
        <span class="date-type">{{ date('M d/ Y', strtotime($recent->created_at)) }}</span> </div>
</div>
@endforeach
<!-- recent single post end -->
