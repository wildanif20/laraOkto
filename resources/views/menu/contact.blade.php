@extends('layouts.master')
@section('content')
    {{-- <script type="text/javascript">
        function kirim(pesan) {
            confirm('yakin?');
            alert('Terkirim');
        }

        function ulang() {
            var a = prompt('masukan nama :');
            var b = confirm('Masukan naman lagi ?');
            if (b = true) {
                prompt('masukan nama :');
                confirm('Masukan naman lagi ?');
            } else {
                alert('ini');
            }
        }

        function verify(){
            // var fn = document.forms['form']['fn'].value;

            // if (fn == ""){
            //     alert('Name Empty!');
            // }   

            var fn = document.getElementById('fn').value;
            var email = document.forms['form']['email'].value;
            var text = document.forms['form']['text'].value;

            if((fn == "") || (email == "") || (text == "")){
                swal("A Basic JS alert by a plug-in");
            }
        }
    </script> --}}
    <div class="container">
        <p>FORM</p>
        {{-- Bisa pakai onsubmit dalam tag form --}}
        {{-- CONTOH
            <form name="form" onsubmit="function();"> 
            </form>
        --}}
    
        <form action="proses" method="post">
           {{csrf_field()}}
            <div class="form-group">
                <label for="fn">Name</label>
                <input type="text" class="form-control" id="fn" placeholder="Cool" name="fn">
            </div>
            <div class="form-group">
                <label for="femail">Email </label> <span class="badge badge-warning">! Important</span>
                <input type="email" class="form-control" id="femail" placeholder="name@example.com" name="email">
            </div>
            <div class="form-group">
                <label for="text">Example textarea</label>
                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
            </div>
            <input type="submit" value="Kirim" class="btn btn-primary"> {{-- <input type="button" value="coba" onclick="ulang();" class="btn btn-secondary"> --}}
            <a href="{{url('/')}}" class="btn btn-dark">Back</a>

        </form>
    </div>
@endsection