@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listado de Productos</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('products.create') }}" class="btn btn-success"><i class="bi bi-plus-circle"></i> Crear Nuevo Producto</a>
        </div>
    </div>
</div>
<br />
@if ($msg = Session::get('success'))
    {{-- <div class="alert alert-success" role="alert">
        <p>{{ $msg }}</p>
    </div> --}}
    <div class="toast-container position-absolute top-0 end-0 p-3">
    <div class="toast align-items-center text-bg-info" role="alert" data-bs-autohide="true" data-bs-delay="5000" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ $msg }}
          </div>
          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    </div>
@endif

<table class="table table-bordered table-striped">
    <tr>
        <th>#</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Detalle</th>
        <th width="180px">Acciones</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px" /></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td class="text-center">
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info"><i class="bi bi-search"></i></a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div class="d-flex">
    {!! $products->links() !!}
</div>
@endsection
