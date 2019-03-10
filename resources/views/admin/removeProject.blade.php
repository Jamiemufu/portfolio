@extends('layouts.default')

@section('content')

<section class="remove--project">
    <div class="title text-center">
        <h5>Delete a project</h5>
    </div>
    <div class="container examples" onclick="">
        <div class="row text-center">
            {{-- loop through projects model and display--}}
            @foreach ($projects as $project)

            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="ex-con text-center">
                    {{-- post id to remove from database --}}
                    <form action="{{ action('ProjectController@removeProject', [$project->id]) }}" method="POST">
                        @csrf
                        <img class="bg" src="{{ asset( $project->image) }}" alt="">
                        <div class="overlay">
                            <div class="middle">
                                <h3> {{ $project->name }}</h3>
                                {{-- icons in db --}}
                                <p>
                                    {!! $project->html !!}
                                    {!! $project->css !!}
                                    {!! $project->js !!}
                                    {!! $project->php !!}
                                    {!! $project->dbase !!}
                                </p>
                                
                                <button type="submit">DELETE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @endforeach

            <!-- end examples -->
        </div>
        <!-- end examples container -->
    </div>
</section>


@endsection