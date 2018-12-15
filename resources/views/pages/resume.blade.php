@extends('layouts.default')

@section('content')
    
{{-- thank you section --}}
<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
    
                    <div class="top">
                        <h1 id="h1">
                            Resume
                        </h1>
                       
                        <h5>Please click the button below to download/view</h5>
                    </div>
                    
                    <div class="text-center resume">
                        <a href="{{ asset('documents/resume.pdf') }}" target="_blank"><button>Resume</button></a>
                    </div>
                </div>
            </div>
        </div>

@endsection