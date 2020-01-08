@extends('layouts.default')

@section('content')


<!-- hero section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="top">
                    <h1>JE Design & Development</h1>
                    <h5>I am lucky enough to do what I love. I thought it was about time to share</h5>
                </div>

                <img class="banner" src="images/banner.jpg" alt="Banner">

            </div>
        </div>
    </div>

</section>
<!-- end hero section -->
<!-- intro section -->
<section>
    <div class="container-fluid intro">
        <div class="container-fluid text-center">
            <div class="row title">
                <div class="col-12 text-center">

                    <div class="title">
                        <h1>I'm Jamie. This is what I love to do!</h1>
                        <h5>Completely Self-taught Full Stack Web Developer looking to advance looking to use my skills
                            to save the world! Maybe not save the world, but definitely solve problems and make awesome
                            websites and applications</h5>
                    </div>

                </div>
            </div>
            <div class="row table text-center">
                <!-- dev col -->
                <div class="col-12 col-md-4 sec-col">
                    <div>
                        <i class="fas fa-code"></i>
                        <h3>Develop</h3>
                        <p>I code in all sorts of languages, which language depends on the given task at hand</p>
                        <h5>Technologies I use</h5>
                        <p>HTML, CSS, Javascript, PHP, Node.js and more</p>
                        <h5>Tools for the job</h5>
                        <ul>
                            <li>VSCode</li>
                            <li>LESS/SASS</li>
                            <li>BitBucket</li>
                            <li>Github</li>
                            <li>Bootstrap</li>
                            <li>Libraries</li>
                            <li>Imagination!</li>
                        </ul>
                    </div>
                </div>
                <!-- deploy col -->
                <div class="col-12 col-md-4 sec-col">
                    <div>
                        <i class="fas fa-terminal"></i>
                        <h3>Deploy</h3>
                        <p>I don't just code. I can also deploy. From setting up Ubuntu or using Cpanel</p>
                        <h5>Where do you need it</h5>
                        <p>Heroku, git, AWS, GoogleCloud, GoDaddy</p>
                        <h5>Anything else</h5>
                        <ul>
                            <li>Install Ubuntu</li>
                            <li>Set up MYSQL</li>
                            <li>Setup PHP</li>
                            <li>Setup Node.js</li>
                            <li>Deploy via Git/SSH</li>
                            <li>Dev sites</li>
                            <li>Deploy to production</li>
                        </ul>
                    </div>
                </div>
                <!-- enjoy col -->
                <div class="col-12 col-md-4">
                    <div>
                        <i class="fas fa-coffee"></i>
                        <h3>Enjoy</h3>
                        <p>Because I can build and deploy, your website is one thing you dont need to worry about</p>
                        <h5>Sit back and relax</h5>
                        <p>Everything will get taken care of, enjoy the break</p>
                        <h5>Maintenance you say</h5>
                        <ul>
                            <li>Updates</li>
                            <li>Amends</li>
                            <li>Re-factoring code</li>
                            <li>Re-Designs</li>
                            <li>Domain registration</li>
                            <li>Automated services</li>
                        </ul>
                    </div>
                </div>
                <!--end cols-->

            </div>
        </div>

    </div>
</section>
<!-- end intro section -->
<!--examples section-->
<section>
    <!-- section title -->
    <div class="container examples">
        <div class="row text-center">
            <div class="col-12 col-md-12 text-center">
                <div class="title">
                    <h1>Recent work</h1>
                    <h5>This is some of my recent work. Feel free to take a look</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- projects start -->
    <div class="container examples" onclick="">
        <div class="row text-center">
            {{-- loop through projects model and display--}}
            @foreach ($projects as $project)

                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="ex-con text-center">
                        <img class="bg" src="{{ asset( $project->image) }}" alt="">
                        <div class="overlay">
                            <div class="middle">
                                <h3> {{ $project->name }}</h3>
                                <p>
                                    {!! $project->html !!}
                                    {!! $project->css !!}
                                    {!! $project->js !!}
                                    {!! $project->php !!}
                                    {!! $project->dbase !!}
                                </p>
                                <a href="{{ $project->link }}" target="_blank"><button>Visit Site</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            <div class="col-12 more">
                <a href="https://codepen.io/jamiemufu/" target="_blank">
                    <button><span>See more</span><i class="fab fa-codepen" aria-hidden="true"></i></button>
                </a>
            </div>
            <!-- end examples -->
        </div>
        <!-- end examples container -->
    </div>
</section>
<!--end examples section-->

<!-- contact section -->
<section>
    <div class="container-fluid test">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 sl">


                    <div class="title">
                        <h1>Testimonials</h1>
                        <h5>This is what people who work with me say...</h5>
                    </div>

                    <div class="slider">
                        {{-- Loop through testimonials and only display if they are approved --}}
                        @foreach ($testimonials as $test)
                            @if ($test->approved === 'Approved')

                            <div>
                                <img class="text-center" src="{{ asset($test->filename) }}" alt="">
                                <h5 class="quote">{{ $test->comment}}</h5>
                                <p class="author">{{ $test->author }}</p>
                                <p class="company">{{ $test->company }}</p>
                            </div>

                            @endif
                        @endforeach

                        {{-- end slider --}}
                    </div>

                </div>
                {{-- end col --}}
            </div>
        </div>
    </div>
</section>
<!--end contact section-->
<!--FORM-->
<section>
    <div class="container contact-form text-center" id="form_title">

        <div class="title">
            <h1>If you would like a chat, fill out the form. Coffee is on me</h1>
            <h5>I would love to hear about future work or projects</h5>
        </div>

        <form method="POST" action="{{ action('ContactController@store') }}">
            @csrf

            <div class="row text-center">

                {{-- first col --}}
                <div class="col-12 col-md-6 text-left">
                    <label for="name">Name*</label>
                    <input type="text" name="name" required tabindex="1">
                    <label for="location">Location*</label>
                    <input type="text" name="location" required tabindex="3">
                </div>

                {{-- second col --}}
                <div class="col text-left">
                    <label for="email">Email*</label>
                    <input type="email" name="email" required tabindex="2">
                    <label for="budget">Project/Budget</label>
                    <input type="text" name="budget" tabindex="4">
                </div>

                {{-- full bottom col --}}
                <div class="col-12 text-left">
                    <label for="comments">Comments/suggestions</label>
                    <textarea name="comments" cols="90" rows="10" tabindex="5"></textarea>
                    {{-- recaptcha --}}
                <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}"></div>
                    <div class="text-center">
                        <button type="submit">Submit</button>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</section>
{{-- end form section --}}

@endsection
