@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Ingredients Section</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('ingredients.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label> Name</label>
                            <input type="text" class="form-control" name="Name">
                        </div>
                        <div class="col-md-6">
                            <label>Description</label>
                            <input type="text" class="form-control" name="Description">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="Phone">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $ingredients as $key => $ingredients )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $ingredients->Name }}</td>
                            <td scope="col">{{ $ingredients->Description }}</td>
                            <td scope="col">{{ $ingredients->Phone }}</td>
                            <td scope="col">

                            <a href="{{ route('ingredients.show', $ingredients->id) }}">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> Show
                                    </button>
                            </a>

                            <a href="{{  route('ingredients.edit', $ingredients->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('ingredients.destroy', $ingredients->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush