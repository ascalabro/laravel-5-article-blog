@if($errors->any())
    <ul class="">
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
    @endif