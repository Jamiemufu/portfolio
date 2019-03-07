@extends('layouts.default')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 top">
                {{-- message from controller --}}
                <h5>Displaying all your testimonials</h5>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container testimonial--view">
        <div class="row">   
            {{-- view all testimonials from the database --}}
            @foreach ($testimonials as $item)   

                <div class="col-12">
                    <div class="testimonial--list testimonial--list__all">  
                        <p>
                            <span>Name: </span> {{$item->author}}
                            {{-- float image right inside this p--}}
                            <img src="{{asset($item->filename)}}" alt="" width="100" class="hide-mobile">
                        </p>
                    
                        <p><span>Comment: </span> {{$item->comment}}</p>
                        <p><span>Company: </span> {{$item->company}}</p>
                        <p><span>Approved: </span> {{$item->approved}}</p>
                        <p>&nbsp;</p>
                        {{-- buttons --}}
                        <p> 
                            <img src="{{asset($item->filename)}}" alt="" width="100" class="show-mobile">
                        </p>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

@endsection