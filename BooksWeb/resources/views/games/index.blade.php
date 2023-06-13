<x-layout title='Books'>
  <a href="/create" class = "btn btn-dark mb-2">Adicionar</a>
  <ul class="list-group">
    @foreach($books as $book)
    <li class="list-group-item">{{$book->nome}}</li>
    @endforeach
  </ul>
</x-layout>
