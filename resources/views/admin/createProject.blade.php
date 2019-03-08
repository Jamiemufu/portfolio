@extends('layouts.default')

@section('content')
    


<!--FORM-->
<section>
        <div class="container project-form text-center" id="form_title">
    
            <div class="title">                
                <h1>Add a new project</h1>
            </div>
    
            <form method="POST" action="{{ action('ProjectController@store') }}" enctype="multipart/form-data">
                @csrf
    
                <div class="row text-center">
    
                    {{-- first col --}}
                    <div class="col-12">
                        
                        <div class="form-50">
                            <div class="input--label">            
                                <label for="name">Name:
                                    <input type="text" name="name" id="" required tabindex="1">
                                </label>
                            </div>

                            <div class="input--label">           
                                <label for="url">URL:
                                    <input type="text" name="url" id="" required tabindex="2">
                                </label>
                            </div>

                        </div>

                        <div class="form-100 text-left">
                            <label for="picture">Add a image for the background</label>
                            <input type="file" name="picture" required placeholder="Select a file to upload">
                        </div>
                        
                        <div class="form-25 input--checkbox text-center">
                            <label class="input--checkbox__info">
                                Please select the icons you wish to display
                            </label>

                            <label for="html"><i class="fab fa-html5"></i>
                                <input type="checkbox" name="html" id="" value="<i class='fab fa-html5'></i>">
                            </label>

                            <label for="js"><i class="fab fa-js-square"></i>
                                <input type="checkbox" name="js" id="" value="<i class='fab fa-js-square'></i>">
                            </label>

                            <label for="php"><i class="fab fa-php"></i>
                                <input type="checkbox" name="php" id="" value="<i class='fab fa-php'></i>">
                            </label>

                            <label for="css"><i class="fab fa-css3-alt"></i>
                                <input type="checkbox" name="css" id="" value="<i class='fab fa-css3-alt'></i>">
                            </label>

                            <label for="dbase"><i class="fas fa-database"></i>
                                <input type="checkbox" name="dbase" id="" value="<i class='fas fa-database'></i>">
                            </label>
                        </div>

                        <div class="form-100 text-center">
                            <button>Submit</button>
                        </div>
                        
                    </div>
                        
    
                </div>
            </form>
        </div>
    </section>
    {{-- end form section --}}

    @endsection