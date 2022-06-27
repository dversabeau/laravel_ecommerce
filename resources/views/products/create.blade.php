@extends('../dashboard')

@section('content')

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
  @crsf
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
@endsection