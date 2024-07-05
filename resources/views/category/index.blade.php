@extends('layout')
@extends('content')

<div class="container">
    <h3 align=" cnter">
        Category
    </h3>
    </br>
    <div class=" row">
        <div class="col-md:2">
            <div class="col-md-2">
                <div class="form-area">
                    <form action="({route('category.store')})">
                        @csrf
                        <div class="row">
                            <label> Category Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option selected>Select Menu</option>
                                <option value="1">True</option>
                                <option value="0">false</option>
                            </select>
                        </div>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>

        </div>
    </div>



</div>


@endsection