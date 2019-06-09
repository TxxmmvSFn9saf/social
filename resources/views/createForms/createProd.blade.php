@section('createProduct')
    <form>
        <div class="form-group">
            <label for="exampleInputProductName">Название Товара</label>
            <input type="text" class="form-control" id="exampleInputProductName" aria-describedby="emailHelp"
                   required>
        </div>
        <div class="form-group">
            <label for="exampleInputProductStatus">Статус</label>
            <input type="text" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputProductQuantity">Количество</label>
            <input type="text" class="form-control" id="exampleInputProductQuantity" required>
        </div>
        <div class="form-group">
            <label for="exampleInputProductPrice">Статус</label>
            <input type="text" class="form-control" id="exampleInputProductPrice" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection