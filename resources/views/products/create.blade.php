<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <h3>Création d'un produit</h3>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-3">
              <label for="name_product" class="form-label">Nom du produit</label>
              <input name="name_product" type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label for="description_product">Description du produit</label>
              <textarea name="description_product" class="form-control" style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
              <label for="price_product" class="form-label">Prix</label>
              <input name="price_product" type="number" class="form-control">
            </div>
            <div class="mb-3">
              <label for="quantity_product" class="form-label">Quantité</label>
              <input name="quantity_product" type="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Créer la fiche produit</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>


</x-app-layout>