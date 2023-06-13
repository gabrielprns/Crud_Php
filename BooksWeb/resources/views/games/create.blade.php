<x-layout title='Books'>
<form action="/save" method="post">
  @csrf
  <div class="mb-3">
    <label for="none" class="form-label">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Adicionar</button>
  
</form>
</x-layout>