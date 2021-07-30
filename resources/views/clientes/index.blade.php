<h3>Clientes: </h3>

<a href="{{route('clientes.create')}}">NOVO CLIENTE</a>


    @foreach($clientes as $c)
        <li>{{$c ['nome'] }}</li>
        <a href="{{route('clientes.edit', $c['id'])}}">Editar</a>
        <a href="{{route('clientes.show', $c['id'])}}">Info</a>

    @endforeach



