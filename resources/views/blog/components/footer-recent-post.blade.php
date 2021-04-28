<div class="footer-recent-post">
    <!-- footer recent post item -->
    @foreach($recentPost as $recent)
        <div class="footer-recent-post-item"><a href="{{ route('blog.blog-detail', $recent) }}">
                <p>{{ \Illuminate\Support\Str::limit($recent->title, 50) }}</p>
                <small><i
                        class="far fa-calendar-alt pr-6"></i> {{ date('M d/ Y', strtotime($recent->created_at)) }}
                </small></a>
        </div>
@endforeach
<!-- footer recent post item end -->
</div>
