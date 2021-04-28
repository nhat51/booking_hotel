<div class="col-lg-6 col-md-6 mb-30">
    <!-- blog box -->
    <div class="blog-box shadow">
        <div class="blog_img mb-20"><img src="front/img/blog/{{ $blog->image }}" alt=""></div>
        <div class="blog-des">
            <h6 class="blog_date font-weight-normal text-muted"><span>{{ $blog->category }}</span> {{ date('M d, Y', strtotime($blog->created_at)) }}</h6>
            <h5 class="mt-10 mb-6"><a href="{{ route('blog.blog-detail', $blog) }}" class="text-dark">{{ \Illuminate\Support\Str::limit($blog->title, 50) }}</a></h5>
            <p class="text-muted">{{ \Illuminate\Support\Str::limit($blog->content, 200) }}</p>
            <div class="read_more">
                <div class="blog_border"></div>
                <a href="{{ route('blog.blog-detail', $blog) }}" class="text-dark text-uppercase"> Read More</a> </div>
        </div>
    </div>

    <!-- blog box end -->
</div>
