@extends('layouts.user.header')
@section('main_content')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                        {{-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> --}}
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Welcome to reyanshinvest</h3>
                        <p>At reyanshinvest, we are dedicated to providing you with accurate, up-to-date, and insightful
                            information about the dynamic world of the stock market. Whether you're an experienced trader, a
                            curious investor, or just someone looking to expand their financial knowledge, you've come to
                            the right place.</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Our Mission</a></h4>
                            <p class="description">Our mission is to empower individuals with the knowledge and tools they
                                need to navigate the complexities of the stock market confidently. We believe that everyone
                                deserves the opportunity to make informed decisions about their investments, regardless of
                                their level of expertise. Through comprehensive research, expert analysis, and user-friendly
                                resources, we aim to demystify the stock market and make financial information accessible to
                                all.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Market Insights</a></h4>
                            <p class="description">Stay up-to-date with comprehensive market analysis, trends, and expert
                                commentary. Our team of seasoned financial analysts continuously monitors market movements
                                to provide you with insights that matter.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            {{-- <h4 class="title"><a href="">Dine Pad</a></h4> --}}
                            <p class="description">We believe that everyone should have access to reliable, up-to-date
                                information and analysis to make sound investment choices. With a commitment to
                                transparency, education, and accessibility, we strive to be your go-to source for all things
                                related to the stock market.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('user/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('user/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('user/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('user/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('user/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->




        <section id="stocklist" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Stock List</h2>
                    <p>Last one year stock recommendation</p>
                </div>
                <div class="row" data-aos="fade-left">
                    <div class="col-lg-12 col-md-6">
                        <table class="table ">
                            <tr>
                                <th>Stock</td>
                                <th>Buy Price</th>
                                <th>Holding Price </th>
                                <th>Return</th>
                            </tr>
                            @foreach ($stocklist as $item)
                                <tr>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->buy_price }}</td>
                                    <td>{{ $item->holding_price }}</td>
                                    <td>{{ $item->return }}%</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $stocklist->links('pagination::bootstrap-5') }}
                    </div>
                </div>
        </section>

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </div>

                <div class="row" data-aos="fade-left">
                    @foreach ($pricing as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="box   pricing-card" data-aos="zoom-in" data-aos-delay="100">
                                <h3>{{ $item->price_card_name }}</h3>

                                <h4><sup>₹</sup>{{ $item->price_card_amount }}<span> /
                                        {{ $item->price_card_duration }}</span></h4>

                                @php $detail = explode(".", $item->price_card_detail) @endphp
                                <ul>
                                    @foreach ($detail as $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                </ul>
                                <div class="btn-wrap">

                                    <button type="button" class=" btn-buy  modalbtn buynow" data-bs-toggle="modal"
                                        
                                        data-bs-target=".exampleModal">
                                        
                                        Buy Now
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade exampleModal" id="exampleModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Enter Contact Details</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- <form class="container"> --}}

                                    <div class="row">

                                        <h4 class="cardName"></h4>
                                        <h5 class="cardDuration"> </h5>
                                        <hr>
                                        <div class="col-12 form-group">
                                            <label for="recipient-name" class="col-form-label">Full Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Full Name">

                                            @csrf
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="recipient-name" class="col-form-label">Whatsapp Number</label>
                                            <input type="number" name="number" id="number" class="form-control"
                                                placeholder="Whatsapp Number">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="recipient-name" class="col-form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Email">
                                        </div>

                                    </div>
                                    <div class="text-center">
                                        <button class=" btn btn-success btn-upi my-4 mt-4 payUPI modalbtn"
                                            data-bs-toggle="modal" data-bs-target="#modelupi"   
                                            data-cduration='{{ $item->price_card_duration }}' 
                                        data-cname='{{ $item->price_card_name }}'
                                        data-cprice='{{ $item->price_card_amount }}'
                                        data-priceplanId ='{{ $item->id}}'
                                        data-href='{{ route('transaction') }}'> Pay Thorugh UPI
                                            
                                        
                                        </button>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">CANCLE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    


                    <div class="modal fade " id="modelupi" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">>
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>Pay Using UPI</h4>
                                            <p>Scan code using</p>
                                            <p class="planprice"></p>
                                        </div>
                                        <div class="col-md-12">
                                            <img src="https://i0.wp.com/www.zidsworld.com/wp-content/uploads/2021/05/payment_icons.png?ssl=1"
                                                width="450px" class="img-fluid" />
                                        </div>
                                        <div class="col-md-12">
                                            <img src="https://tse3.mm.bing.net/th?id=OIP.LCFs_orjv32lVgDhEPST_gHaHa&pid=Api&P=0&h=180"
                                                width="450px" class="img-fluid" />
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary upi-cancle"
                                        data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <!-- Modal -->

        </section><!-- End Pricing Section -->





        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">How will I receive the recommendations? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    You shall receive the recommendations on a real-time basis via Whatsapp notifications.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">What if I have queries? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Don’t Worry! You shall be allotted a dedicated Relationship Manager who shall accompany
                                    you on your investment journey & will ensure that all your queries are answered.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">What else will I receive apart from
                                recommendations?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    You deserve to know why you are investing in any of the recommendations.
                                    Apart from the entry and exit alerts, you will also receive detailed research reports
                                    that cover the logic behind the recommendation, the financials of the company, the
                                    industry overview etc.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">At what interval will I receive the stock
                                recommendations? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    In the beginning, we will share three or four stocks, and thereafter every month one or
                                    two new stock recommendations(depending on the market condition) will be shared with you
                                    along with a SEBI compliant detailed research report.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Is this the correct time to start
                                investing? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Our allocation and risk management strategy is designed in such a way that it does not
                                    matter at what levels of nifty you are beginning to build your portfolio.
                                    We attempt to build a portfolio in a staggered manner so that any broader market
                                    corrections are taken complete advantage of.
                                    Also, we would rather follow the markets rather than trying to predict them.
                                    Our Strategy to focus simply on the trajectory of a business rather than the broader
                                    markets has proven time and again effective in generating alpha.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                        @if (isset($data))
                            <label class="alert alert-success">{{ $data }}</label>
                        @endif
                        <div method="post" role="form" class="php-email-form">

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    @csrf
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <div class="text-center "><button class="btn-submit"
                                    data-href="{{ route('contact.create') }}" type="submit">Send Message</button></div>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= About Section ======= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
        $("body").on("click", '.upi-cancle', function(e) {
            e.preventDefault();
            $('.modal-backdrop').removeClass('modal-backdrop fade show');
        });
        $("body").on("click", '.btn-submit', function(e) {
            e.preventDefault();
            if ($('#name').val() == '') {
                swal("Please Enter Name");
                return false;
            }
            if ($('#email').val() == '') {
                swal("Please Enter Email ID");
                return false;
            }
            if ($('#subject').val() == '') {
                swal("Please Enter Subject");
                return false;
            }
            if ($('#message').val() == '') {
                swal("Please Enter Message");
                return false;
            }

            $.ajax({
                type: 'post',
                url: $(this).attr('data-href'),
                data: {
                    '_token': $('input[name="_token"]').val(),
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'subject': $('#subject').val(),
                    'message': $('#message').val(),


                },
                success: function(response) {
                    console.log(response);
                    if (response.response = 'success') {
                        swal("Thank you for contact.", {
                            icon: "success",
                        });
                        $('#name').val('');
                        $('#email').val(''),
                            $('#subject').val('');
                        $('#message').val('');
                    }

                }
            });

        });

        $("body").on("click", '.payUPI', function(e) {
            e.preventDefault();

            $('.cardName').text('');
            $('.cardDuration').text('');
            $('.planprice').text('');
            var cardname = $(this).attr('data-cname');
            var cardprice = $(this).attr('data-cprice');
            var cardDuration = $(this).attr('data-cduration');
            var priceplanId= $(this).attr('data-priceplanId')
            $('.cardName').text(cardname);
            $('.cardDuration').text(cardDuration);
            $('.planprice').text(cardprice);


            $.ajax({
                type: 'post',
                url: $(this).attr('data-href'),
                data: {
                    '_token': $('input[name="_token"]').val(),
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'number': $('#number').val(),
                    'payment': 'UPI',
                    'priceplan':cardname,
                    'planprice':cardprice,
                    'planDuration' :cardDuration,
                    'priceplanId':priceplanId
                    




                },
                success: function(response) {


                }
            });

        });
    </script>
@endsection
