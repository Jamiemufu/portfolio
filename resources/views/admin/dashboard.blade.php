@extends('layouts.default')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 top">
                {{-- message from controller --}}
                <h5>Admin Section</h5>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container admin">
        <div class="row">   
            <div class="col-12">
                <div class="admin--actions">
                    <button onclick="window.location='{{ url('/')}}'">
                       Home
                    </button>
                    <button onclick="window.location='{{ url('/testimonials/approve') }}'">
                        Approve Testimonials
                    </button>
                    <button onclick="window.location='{{ url('/testimonials/all') }}'">
                        View Testimonials
                    </button>
                    <button onclick="window.location='{{ url('/project/create') }}'">
                        Create Project
                    </button>
                    <button onclick="window.location='{{ url('/project/delete') }}'">
                        Delete Project
                    </button>
                    <button>
                       Edit Content
                    </button>
                </div>
                
            </div>
            
        </div>
    </div>

</section>

@endsection