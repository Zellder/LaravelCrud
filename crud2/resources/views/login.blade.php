@extends('layouts.main')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <form action="/crud" method="POST">
        @csrf
        <h3>Login</h3>  
    <div class="form-group">
        <input type="text" id="login" name="login" class="form-control" placeholder="Email">
    </diV>
    <div class="form-group">
        <input  type="password" id="login" name="login" class="form-control" placeholder="password">
    </diV>
      <button type="button" class="btn btn-success" >Entrar</button>
      <button type="button" class="btn btn-primary" >Cadastrar</button>
      
      <script>
var login = true;
document.getElementById("demo").innerHTML = x;
</script>

</form>
</div>
@endsection
