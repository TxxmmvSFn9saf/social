@extends('layouts.app')

@section('products_table')
  <a class="btn btn-success" id="createProduct"  href="/products/create"><i class="fas fa-plus-circle"></i> Товар</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Статус</th>
            <th scope="col">Количество</th>
            <th scope="col">Цена</th>
            <th scope="col">Изменить</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($getList as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <th><img alt="" src="<?php echo (asset ("/uploads/{$item->imageName}")); ?>" style="height: 50px;"></th>
            <td>{{$item->name}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}}</td>
            <td><a href="#"><i class="far fa-edit"></i></a></td>
            <td><a href="/products/delete/{{$item->id}}"><i class="far fa-trash-alt"></i></a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection
