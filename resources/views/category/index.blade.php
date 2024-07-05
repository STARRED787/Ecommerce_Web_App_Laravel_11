@extends('layout')
@extends('content')

<div class="container">
    <h3 align=" cnter">
        Category
    </h3>
    </br>

    <div class=" row">
        <div class="col-md:2">

        </div>
        <div class="col-md-2">
            <div class="frm-area">
                <form action="({route('category.store')})">
                    @csrf
                    <div class="row">
                        <label> Category Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>


                </form>
            </div>
        </div>
    </div>



</div>


@endsection