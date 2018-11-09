@extends('layouts.default')

@section('content')

<div id="container" class="container no-padding">

    <form method="post" action="{{ url('todo') }}">
        @csrf
        <div class="row">
            <div class="col">
                <div class="todo">
                    <h1>To-do list</h1>
                    <div class="todo--buttons">
                        <button type="submit">
                            <i id="plus" class="fa fa-plus"></i>
                        </button>
                        <button id="down">
                            <i id="arrow" class="fa fa-arrow-circle-up"></i>
                        </button>
                    </div>
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
                        <span class="delete"><input name="_method" type="hidden" value="DELETE">
                            <button type="submit" value="DELETE"><i class="fa fa-trash"></i></button>
                        </span>
                        <!--Display list-->
                        {{$items['list']}}

                        <span class="edit edit-span" id="edit">
                            <button type="button"><i id="icon" class="fa fa-check icon-check"></i></button>
                        </span>
                    </form>
                </li>
            </ul>

            @endforeach

        </div>
    </div>

</div>
@endsection
