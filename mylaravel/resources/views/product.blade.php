@extends('layouts.default_with_menu')

@section('content')
    <form action="{{ url('product') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label>Category Name</label>
                    <input  name="category_name" type="text" class="form-control" />
                </div>
            </div>
        </div>
        <button class="btn btn-primary" id="btn-add-product-list" type="button"> + เพิ่ม Product</button>
        <div class="row mt-3" id='product-list'>
<div class="col-6" >
<label>Product Name</label>
</div>
        </div>
        <div class="mt-3 row">
            <button class="btn btn-success" type="submit">บันทึก</button>
        </div>
    </form>
    <table class="mt-3 table">
        <thead>
            <tr>
                <td>#</td>
                <td>Category Name</td>
                <td>Product Name</td>
                <td>User Name</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var count =1;
        $('#btn-add-product').on('click', function(){
            $("#add-product").append(`
            <div class="mt-3 col-6">
                <label class="form-label product-label">${count++}. Product Name
                    <button type="button" class="btn btn-danger btn-delete-product">ลบ</button>
                </label>
                    <input type="text" name="product_name[]" class="form-control">
            </div>
            `)
        })

        $(document).on('click','.btn-delete-product', function(){
            $(this).parent().parent().remove();
        })
    });
</script>
@endsection
