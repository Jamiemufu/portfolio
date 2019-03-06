@extends('layouts.default')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 top">
                <h5>Approve or remove pending testimonials</h5>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container testimonial--view">
        <form action="{{ action('Controller@update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">   
            
                {{-- view all testimonials from the database --}}
                @foreach ($testimonials as $item)   
                    {{-- @if ($item->approved === 'pending') --}}

                    <div class="col-12">
                        <div class="testimonial--list">  
                            <p>
                                <span>Name: </span> {{$item->author}}
                                {{-- float image right inside this p--}}
                                <img src="{{asset($item->filename)}}" alt="" width="100">
                            </p>
                        
                            <p><span>Comment: </span> {{$item->comment}}</p>
                            <p><span>Company: </span> {{$item->company}}</p>
                            <p><span>Approved: </span> {{$item->approved}}</p>
                            <p>&nbsp;</p>
                            {{-- buttons --}}
                            <p> 
                                <button>
                                    <i class="fas fa-check approve"></i>
                                    <span class="approve"> Approve </span>
                                </button>
                                   
                                <button>
                                    <i class="fas fa-times remove"></i>
                                    <span class="remove"> Remove </span>
                                </button>
                                
                                    
                                
                            </p>
                        </div>
                    </div>

                    {{-- @endif --}}
                @endforeach

            </div>
        </form>
    </div>

</section>

@endsection