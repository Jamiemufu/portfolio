@extends('layouts.default')

@section('content')
    
{{-- ERROR --}}
<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
    
                    <div class="top">
                        <h1 id="h1">
                            ERROR
                        </h1>
                       
                        <h5>Sorry the page requested is not available</h5>
                    </div>
                    
                    <div class="text-center thanks">
                        <a href="/"><button>Click to go back</button></a>
                    </div>
                </div>
            </div>
        </div>

@endsection