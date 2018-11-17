@extends('layouts.default')

@section('content')


<!-- hero section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="top">
                    <h1>JE Design & Development</h1>
                    <h5>I love what I do, I also love doing it</h5>
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
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio neque accusantium quod esse
                            eligendi eos architecto delectus quaerat maiores velit ab aliquam sunt, qui ad ullam,
                            voluptates distinctio totam iste?</h5>
                    </div>

                </div>
            </div>
            <div class="row table text-center">
                <!-- dev col -->
                <div class="col-12 col-md-4 sec-col">
                    <div>
                        <i class="fas fa-code"></i>
                        <h3>Develop</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis cupiditate, sit in
                            rerum dolorem enim similique veniam.</p>
                        <h5>Things I can do</h5>
                        <p>HTML, CSS, Javascript, PHP, Node.js </p>
                        <h5>Tools for the job!</h5>
                        <ul>
                            <li>VSCode</li>
                            <li>LESS/SASS</li>
                            <li>BitBucket</li>
                            <li>Github</li>
                            <li>Bootstrap</li>
                            <li>Laravel/Symfony</li>
                            <li>Imagination!</li>
                        </ul>
                    </div>
                </div>
                <!-- deploy col -->
                <div class="col-12 col-md-4 sec-col">
                    <div>
                        <i class="fas fa-terminal"></i>
                        <h3>Deploy</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis cupiditate, sit in
                            rerum dolorem enim similique veniam.</p>
                        <h5>Where do you need it?</h5>
                        <p>Heroku, git, AWS, GoogleCloud, GoDaddy</p>
                        <h5>Anything else?</h5>
                        <ul>
                            <li>Install Ubuntu</li>
                            <li>Set up MYSQL</li>
                            <li>Setup PHP</li>
                            <li>Deploy via Git/SSH</li>
                            <li>Dev site for progress checks</li>
                            <li>Deploy to production</li>
                        </ul>
                    </div>
                </div>
                <!-- enjoy col -->
                <div class="col-12 col-md-4">
                    <div>
                        <i class="fas fa-coffee"></i>
                        <h3>Enjoy</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis cupiditate, sit in
                            rerum dolorem enim similique veniam.</p>
                        <h5>Sit back and relax</h5>
                        <p>Everything will get taken care of</p>
                        <h5>Maintenance you say?</h5>
                        <ul>
                            <li>Updates</li>
                            <li>Amends</li>
                            <li>Re-factoring code</li>
                            <li>Re-Designs</li>
                            <li>Anything I can do to help</li>
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
                    <h1>This is some of my recent work</h1>
                    <h5>If you would like to work together why not contact me?</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- examples start -->
    <div class="container examples" onclick="">
        <div class="row text-center">
            <!--Firsr example-->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con text-center">
                    <img class="bg" src="images/rank.jpg" alt="rank">
                    <div class="overlay">
                        <div class="middle">
                            <h3>Grovsenor Casinos</h3>
                            <p>
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fas fa-database"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                            </p>
                            <a href="https://grosvenorcasinoevents.co.uk/" target="_blank"><button>Visit Site</button></a>
                            <img src="images/icon_white.png" alt="JE Design">
                        </div>
                    </div>
                </div>
            </div>
            <!-- second example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img class="bg" src="images/wwprizes.jpg" alt="rank">
                    <div class="overlay">
                        <div class="middle">
                            <h3>WeightWatchers UK</h3>
                            <p>
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fas fa-database"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                            </p>
                            <a href="https://winwwprizes.co.uk/" target="_blank"><button>Visit Site</button></a>
                            <img src="images/icon_white.png" alt="JE Design">
                        </div>
                    </div>
                </div>
            </div>
            <!-- third example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img class="bg" src="images/regus.jpg" alt="rank">
                    <div class="overlay">
                        <div class="middle">
                            <h3>Regus UK</h3>
                            <p>
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fas fa-database"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                            </p>
                            <a href="http://itgproduction.com/clients/regus/landing_pages/regus_eco_landing_page/index.html" target="_blank"><button>Visit Site</button></a>
                            <img src="images/icon_white.png" alt="JE Design">
                        </div>
                    </div>
                </div>
            </div>
            <!-- fouth example -->
            <div class="col-12 col-md-6 col-lg-4 text-center hide">
                <div class="ex-con">
                    <img class="bg" src="images/namco.jpg" alt="rank">
                    <div class="overlay">
                        <div class="middle">
                            <h3>Namco Funscape!</h3>
                            <p>
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fas fa-database"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                            </p>
                            <a href="https://namcofunscape.com/" target="_blank"><button>Visit Site</button></a>
                            <img src="images/icon_white.png" alt="JE Design">
                        </div>
                    </div>
                </div>
            </div>
            <!-- fifth example -->
            <div class="col-12 col-md-6 col-lg-4 text-center hide">
                <div class="ex-con">
                    <img class="bg" src="images/mecca.jpg" alt="rank">
                    <div class="overlay">
                        <div class="middle">
                            <h3>Mecca Bingo</h3>
                            <p>
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fas fa-database"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                            </p>
                            <a href="https://dev.meccabingoevents.co.uk/" target="_blank"><button>Visit Site</button></a>
                            <img src="images/icon_white.png" alt="JE Design">
                        </div>
                    </div>
                </div>
            </div>
            <!-- sixth example -->
            <div class="col-12 col-md-6 col-lg-4 text-center hide">
                <div class="ex-con">
                    <img class="bg" src="images/bunzl.jpg" alt="rank">
                    <div class="overlay">
                        <div class="middle">
                            <h3>Bunzl</h3>
                            <p>
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fas fa-database"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                            </p>
                            <a href="https://dev.bunzladvantage.com/" target="_blank"><button>Visit Site</button></a>
                            <img src="images/icon_white.png" alt="JE Design">
                        </div>
                    </div>
                </div>
            </div>

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
                <div class="col-12">
                    <div class="title">
                        <h1>Testimonials</h1>
                        <h5>This is what people who work with me say...</h5>
                    </div>
                    <img src="images/trump.jpg" alt="">
                    <h5 class="quote">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio praesentium
                        nihil quos doloribus? Vel at, cupiditate repellendus et eos porro praesentium nemo distinctio
                        magni iste. Voluptates asperiores recusandae aperiam quis!</h5>
                    <p class="author">Donald Trump</p>
                    <p class="company">President USA</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!--end contact section-->
<!--FORM-->
<section>
    <div class="container contact-form text-center" id="form_title">
        <div class="title">
            <h1>If you need a chat, fill out the form. Coffee is on me</h1>
            <h5>I would love to hear about furture work or projects</h5>
        </div>
        <form action="">
            <div class="row text-center">
                <div class="col-12 col-md-6 text-left">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" required>
                    <label for="location">Location</label>
                    <input type="text" name="location" id="" required>
                </div>
                <div class="col text-left">
                    <label for="email">Email</label>
                    <input type="email" name="" id="" required>
                    <label for="budget">Project/Budget</label>
                    <input type="text" name="" id="">
                </div>
                <div class="col-12 text-left">
                    <label for="comments">Comments/suggestions</label>
                    <textarea name="comments" id="" cols="90" rows="10"></textarea>
                    <div class="text-center">
                        <button>Submit</button>
                    </div>
                </div>
                {{-- title for footer here because of map overlaying divs --}}
                <div class="col">
                    <div class="title">
                        <h1>Local businesses</h1>
                        <h5>Get in touch, I would love to help. I believe communities should stick together</h5>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection