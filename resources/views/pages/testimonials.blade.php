@extends('layouts.default')

@section('content')
    
{{-- new testimonial section --}}
<section>
        <div class="container testimonials">
            <div class="row">
                <div class="col-12">
    
                    <div class="top">
                        <h1 id="h1">
                            Thank you for wanting to comment on my work
                        </h1>
                       
                        <h5>Please fill in the form below to show your commments on my website!</h5>
                        <h5>Once again thank you!</h5>
                    </div>

                    <form action="{{ action('Controller@store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <fieldset>
                            <label for="author">Author
                                <input type="text" name="author" required>
                            </label>

                            <label for="company">Company
                                <input type="text" name="company" required>
                            </label>

                            <label for="picture">Picture</label>
                                <input type="file" name="picture" required>
                            

                        </fieldset>

                            <label for="comment">Comments</label>
                            <textarea name="comment" id="" cols="30" rows="10"></textarea>
                    
                        <div class="text-center">
                            <button type="submit">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

@endsection