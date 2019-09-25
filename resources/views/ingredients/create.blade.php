@extends('layouts.app')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-info">Upload a New Ingredient</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <form method="POST" action="/ingredients/create" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="title">Product Name</label>
                                    <select name="available_ingredient_id" class="form-control">
                                        @foreach($ingredients_info as $ingredient)
                                            <option value="{{$ingredient->id}}">{{$ingredient->name}} - ({{$ingredient->unit}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="price">Quantity:</label>
                                <input class="form-control" type="number" name="quantity">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="price">Price:</label>
                                <input class="form-control" type="number" name="price">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<button type="submit" class="btn btn-success btn-circle ">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
    </svg>
</button>
</form>
@endsection
