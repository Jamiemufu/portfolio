@extends('layouts.default')

@section('content')
    
{{-- thank you section --}}
<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
    
                    <div class="top">
                        <h1 id="h1">
                            Thank you {{ $name }} 
                        </h1>
                       
                        <h5>I will reply as soon as possible</h5>
                    </div>
                    
                    <div class="text-center thanks">
                        <a href="/"><button>Click to go back</button></a>
                    </div>
                </div>
            </div>
        </div>

@endsection