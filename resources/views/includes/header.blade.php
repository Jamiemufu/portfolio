
<div class="container">
    <div class="row">
        <div class="col-6">
            <div>
                <img src="{{asset('images/icon_purple.png')}}" alt="JE Design">
            </div>
        </div>
        <div class="col-6 text-right">
            <div class="header--btns">
                @auth
                <a href="{{ url('logout') }}"><button>Log out</button></a>
                <a href="{{ url('/admin') }}"><button>Dashboard</button></a>
                @endauth
            </div>
        </div>
    </div>
</div>

