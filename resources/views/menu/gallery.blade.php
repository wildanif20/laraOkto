@extends('layouts.master')
@section('content')
    <div class="container">
    <div class="row align-baseline">
        <div class="card" style="width: 17rem;">
            <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
    </div>
    <div class="card" style="width: 17rem;">
        <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
    </div>
    <div class="card" style="width: 17rem;">
        <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
    </div>
    <div class="card" style="width: 17rem;">
        <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
    </div>
    <div class="card" style="width: 17rem;">
        <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
        </div>
    </div>
    <br />
    <a href="{{url('/')}}" class="btn btn-primary">Back</a>
</body>
</html>
@endsection