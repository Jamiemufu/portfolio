@extends('layouts.default')

@section('content')


<!-- hero section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="top">
                    <h1>JE Design & Development</h1>
                    <h5>I do what I love! That just so happens to be web development</h5>
                </div>

                <img class="banner" src="images/banner.jpg" alt="">

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
                        <h5>Things I can do!</h5>
                        <p>HTML, CSS, Javascript, PHP, Node.js </p>
                        <h5>Tools for the job!</h5>
                        <ul>
                            <li>VSCode</li>
                            <li>LESS/SASS</li>
                            <li>BitBucket</li>
                            <li>Github</li>
                            <li>Codepen</li>
                            <li>Terminal</li>
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
                            <li>Install Ubuntu?</li>
                            <li>Set up MYSQL?</li>
                            <li>Setup PHP?</li>
                            <li>Deploy via Git/SSH?</li>
                            <li>Dev site for progress checks?</li>
                            <li>Deploy to production?</li>
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
                        <h5>Sit back and relax!</h5>
                        <p>Everything will get taken care of</p>
                        <h5>Maintenance you say?</h5>
                        <ul>
                            <li>Updates to exsisting sites</li>
                            <li>Amends to current sites</li>
                            <li>Amends to exsisting sites</li>
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
                    <img src="images/rank.jpg" alt="rank">
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
                            <button>Visit Site</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img src="images/wwprizes.jpg" alt="rank">
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
                            <button>Visit Site</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img src="images/regus.jpg" alt="rank">
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
                            <button>Visit Site</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fouth example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img src="images/namco.jpg" alt="rank">
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
                            <button>Visit Site</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fifth example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img src="images/mecca.jpg" alt="rank">
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
                            <button>Visit Site</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sixth example -->
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con">
                    <img src="images/bunzl.jpg" alt="rank">
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
                            <button>Visit Site</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 more">
                <button><span>See more</span><i class="fab fa-codepen"
                        aria-hidden="true"></i></button>
            </div>
            <!-- end examples -->
        </div>
        <!-- end examples container -->
    </div>
</section>
<!--end examples section-->

@endsection
