<x-layout title="Games">
<a href="{{route('Games.create')}}" class="btn btn-dark mb-2">Adicionar</a>

@isset($mensagemSucesso)
<div class="alert alert-success">
  {{$mensagemSucesso}}
</div>
@endisset


<ul class="list-group">
    @foreach($games as $game)
      <li class="list-group-item d-flex justify-content-between align-itens-center">
        {{$game->nome}}
        
        <span class="d-flex">

          <a href="{{route('Games.edit', $game->id)}}" class="btn btn-primary btn-sm">
            E
          </a>

          <form action="{{route('Games.destroy', $game->id)}}" method="post" class="ms-2">
            @csrf
            @method('DELETE')
            
            <button class="btn btn-danger btn-sm">
              X
            </button>

          </form>
        </span>
      </li>
    @endforeach
</ul>
</x-layout>