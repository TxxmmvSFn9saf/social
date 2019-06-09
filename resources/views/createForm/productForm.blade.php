<style>
    label {
        color: black;
    }
</style>
<form method="post"
      action="/createRing/create/send"
      enctype="multipart/form-data">
    <div class="form-group" style="width: 300px;">
        {{csrf_field()}}
        <input type="file" name="file" class="form-control-file">
        <label for="name">Название:</label>
        <input type="text" name="name" class="form-control">
        <label for="name"> Статус: </label><br>
        <label for="name"> В Наличии: </label>
        <input type="radio" name="status" class="form-control" placeholder="" value="В Наличии"/>
        <label>Нет в наличии:</label>
        <input type="radio" name="status" class="form-control" value="Нет в наличии"/>
        <label>Количество:</label>
        <input type="text" name="quantity" class="form-control">
        <label for="name">Цена:</label>
        <input type="text" name="price" class="form-control">
    </div>
    <input type="submit" value="Submit" name="save" class="btn btn-primary">
</form>

