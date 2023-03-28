@extends('user.layout.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h2>Stretched Link in Card</h2>
        <p>Add the .stretched-link class to a link inside the card, and it will make the whole card clickable (the card will act as a link):</p>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="https://www.screengeek.net/wp-content/uploads/2018/11/avatar-movie.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
           

         <a data-url="{{ route('logout.customer') }}" href="javascript::void(0)" id="logout" class="btn btn-sm btn-info">
            logout
          </a>
          <form id="logout-form" action="{{ route('logout.customer') }}" method="POST" style="display: none;">
              @csrf
          </form>
            </div>
        </div>
    </div>
</div>
@endsection