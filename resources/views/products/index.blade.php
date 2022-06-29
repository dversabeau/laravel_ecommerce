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

          @if(session()->get('success'))
          <div class="alert alert-success">
            {{session()->get('success')}}
          </div>
          @endif

          <h3>Liste des produits</h3>
          <ol class="list-group list-group-numbered">
            @foreach($products as $product)
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">{{$product->name_product}}</div>
                {{$product->description_product}}
                <div>{{$product->price_product}} €</div>
                <form class="d-inline" method="POST" action="{{route('products.destroy', $product->id)}}">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="{{route('products.edit', $product->id)}}"><button type="button" class="btn btn-primary">Modifier</button></a>
              </div>
              <span class="badge bg-success rounded-pill">{{$product->quantity_product}}</span>
            </li>

            @endforeach
          </ol>
        </div>
      </div>
    </div>
  </div>


</x-app-layout>