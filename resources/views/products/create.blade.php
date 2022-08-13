@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar Nuevo Producto</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary"><i class="bi bi-skip-backward"></i> Volver</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong>, revise los errores ocurridos. <br/><br/>
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del producto" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="detail">Detalle</label>
                <textarea name="detail" class="form-control" style="height: 150px;" placeholder="Detalle del producto"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" class="form-control" placeholder="Imagen del producto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Guardar</button>
        </div>
    </div>
</form>
@endsection
