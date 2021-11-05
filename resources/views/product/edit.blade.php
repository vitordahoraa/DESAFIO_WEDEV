@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Produto') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/p/{{$product->id}}/update">
                        @csrf
                        @method('PATCH')


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>

                            <div class="col-md-6">
                                <input  id="price" 
                                        type="number" 
                                        step="0.01" 
                                        class="form-control @error('price') is-invalid @enderror"
                                        name="price" value="{{ old('price') ?? $product->price }}" 
                                        required autocomplete="price" 
                                        autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagem do produto') }}</label>

                            <div class="col-md-6">
                                <input  id="image" 
                                        type="file"
                                        class="form-control @error('image') is-invalid @enderror"  
                                        name="image"   
                                        value="{{ old('image') ?? $product->image}}" 
                                        required autocomplete="image" 
                                        autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Produto') }}</label>

                            <div class="col-md-6">
                                <input  id="product_name" 
                                        type="text"     
                                        class="form-control @error('product_name') is-invalid @enderror"    
                                        name="product_name" value="{{ old('product_name') ?? $product->product_name}}" 
                                        required autocomplete="product_name" 
                                        autofocus>
 
                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_status" class="col-md-4 col-form-label text-md-right">{{ __('Status do produto') }}</label>

                            <select name = 'product_status' class="col-md-6">
                            <option value="" hidden>-</option>
                                @foreach ($product_status as $status)
                                <option value="{{ $status->id }}" class="form-control @error('status_id') is-invalid @enderror" > {{ $status->name }}</option>
                                @endforeach
                                @error('status_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </select>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
