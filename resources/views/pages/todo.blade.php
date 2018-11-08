@extends('layouts.default')

@section('content')

<div id="container" class="container no-padding">
       
    <form method="post" action="{{ url('todo') }}">
        @csrf
        <div class="row">
            <div class="col">

                <div class="todo">
                    <h1>To-do list</h1>
                    <button type="submit" for="list" class="buttons-right">
                        <i id="plus" class="fa fa-plus"></i>
                    </button>
                    <button id="down" type="button" class="buttons-right">
                        <i class="fa fa-arrow-circle-down"></i>
                    </button>
                </div>

                <input type="text" name="item" placeholder="Add New Todo" autocomplete="off" required>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col">
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
    </div>
   
  
</div>
@endsection
