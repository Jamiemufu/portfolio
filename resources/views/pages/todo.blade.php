@extends('layouts.default')

@section('content')

<div id="container" class="container no-padding">
       
    <form method="post" action="{{ url('todo') }}" name="list" >
        @csrf
        <h1>To-do list
            <button id="down" type="button">
                <i class="fa fa-arrow-down"></i>
            </button>
            
            <button type="submit" for="list">
                <i id="plus" class="fa fa-plus"></i>
            </button>
        </h1>

        <input type="text" name="item" placeholder="Add New Todo" autocomplete="off" required>

    </form>

    @foreach ($item as $items)

    <ul class="no-padding">
        <li>
            <form method="post" action="{{ action('itemsController@destroy', $items['id']) }}">
                @csrf
                <span><input name="_method" type="hidden" value="DELETE">
                    <button type="submit" value="DELETE"><i class="fa fa-trash"></i></button>
                </span>
                <!--Display list-->
                 {{$items['list']}}
            </form>
        </li>
    </ul>
    @endforeach
  
</div>
@endsection
