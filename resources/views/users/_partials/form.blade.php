

@if ($errors->any())
<ul class="errors">
    @foreach ($errors->all() as $error)
        <li class="error">{{$error}}</li>
    @endforeach

</ul>  
@endif


@csrf
<input type="text" name="name" placeholder="Nome:" value="{{$user->name ?? old('name')}}">
<input type="email" name="email" placeholder="E-mail: example@email.com" value="{{$user->email ?? old('email')}}">
<input type="password" name="password" placeholder="Senha:">
<button type="submit">
    Enviar
</button>