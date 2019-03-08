@extends('layouts.default')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 top">
                {{-- message from controller --}}
                <h5>{{ $message }}</h5>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container testimonial--view">
        <form action="" method="POST" enctype="multipart/form-data">
            @method('PUT')            
            @csrf
            <div class="row">   
            
                {{-- view all testimonials from the database --}}
                @foreach ($testimonials as $item)   
                    @if ($item->approved !== 'Approved')

                    <div class="col-12">
                        <div class="testimonial--list">  
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
                                
                                <button value="approve" name="approve" id="approve" formaction="{{action('TestimonialController@update', [$item->id])}}">
                                    <i class="fas fa-check approve"></i>
                                    <span class="approve"> Approve </span>
                                </button>                              
                                
                                <button value="remove" name="remove" id="remove" formaction="{{action('TestimonialController@update', [$item->id])}}">
                                    <i class="fas fa-times remove"></i>
                                    <span class="remove"> Remove </span>
                                </button>
                                
                            </p>
                            
                        </div>
                    </div>

                    @endif
                @endforeach

            </div>
        </form>
    </div>

</section>

@endsection