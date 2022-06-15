<!-- Testimonial Section -->
<div class="testimonial-section container-fluid no-left-padding no-right-padding">
    <!-- Container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h3>Відгуки</h3>
        </div><!-- Section Header /- -->
    </div>
    <div class="testimonial-slider">
        @if($revcount==0)
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-1.jpg" alt="testimonial"/></i>
                    <h5>Віталій Кізюк</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        <span class="more-text hide">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
               sanctus est Lorem ipsum dolor sit amet. dfffdf</span>
                        <a data-show="more" more-collapse="false" href="/" class="showmore"
                           style="font-size: 25px">...</a>
                    </p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-2.jpg" alt="testimonial"/></i>
                    <h5>Allan Smith</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet
                        olum</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-3.jpg" alt="testimonial"/></i>
                    <h5>Allan Smith</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet
                        olum</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-1.jpg" alt="testimonial"/></i>
                    <h5>Allan Smith</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet
                        olum</p>
                </div>
            </div>
        @elseif($messagecount==0)
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-1.jpg" alt="testimonial"/></i>
                    <h5>Віталій Кізюк</h5>
                    <p>Олександр відповідально і професійно поставився до процесу моєї реабілітації. навіть
                        не
                        могла повертатися з положення лежачи.</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-2.jpg" alt="testimonial"/></i>
                    <h5>Allan Smith</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet
                        olum</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-3.jpg" alt="testimonial"/></i>
                    <h5>Allan Smith</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet
                        olum</p>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="testimonial-content">
                    <i><img src="assets/images/testi-1.jpg" alt="testimonial"/></i>
                    <h5>Allan Smith</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                        aliquet
                        olum</p>
                </div>
            </div>
        @else
            @foreach($reviews as $review)
                <div class="testimonial-box">
                    <div class="testimonial-content">
                        <i><img src="{{$review->avatar}}" alt="testimonial"/></i>
                        <h5>{{$review->name}}</h5>
                        <p>
                            {!! \Illuminate\Support\Str::limit(strip_tags($review->message), $limit = 30,$end = ' ') !!}
                            <span class="more-text hide">{{substr($review->message,30)}}</span>
                            <a data-show="more" more-collapse="false" href="/" class="showmore" style="font-size: 25px"> більше...</a>
                        </p>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
    <a href="{{route('reviews')}}">
        <figure>
            <div>
                <span class="spannn">Залишити відгук</span>
                <span class="spannn">Залишити відгук</span>
            </div>
        </figure>
    </a>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $('[data-show="more"]').on("click", function (event) {
        event.preventDefault();
        if ($(this).attr("more-collapse") === "false") {
            $(this).attr("more-collapse", "true");
            $(this).prev(".more-text").removeClass("hide");
            $(this).text("приховати");
        } else {
            $(this).text(" більше...");
            $(this).attr("more-collapse", "false");
            $(this).prev(".more-text").addClass("hide");
        }
    });

</script>
<!-- Testimonial Section /- -->
