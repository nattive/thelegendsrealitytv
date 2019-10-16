@extends('admin.layout.app')

@section('content')
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    {{-- <a class="navbar-brand" href="#">The Legend Reality tv</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
        aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse float-right" id="navbarsExample03">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.index')}}">Add contestant <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.update')}}">List Contestant</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
        </ul>
        {{-- <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form> --}}
    </div>
</nav>
<div class=" col-md-12 mx-auto">
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Contestants</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">location</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allContestants as $allContestant)
                                <tr>
                                    <td>
                                        <img alt="Image placeholder" class="img-thumbnail rounded-circle" width="50px"
                                            src="/storage/{{ $allContestant -> image }}">
                                    </td>
                                    <td>
                                       {{ $allContestant -> id ?? 'N/A'}}
                                    </td>
                                    <td>
                                        {{ $allContestant -> name ?? 'N/A'}}
                                    </td>
                                    <td>
                                        {{ $allContestant -> gender ?? 'N/A'}}
                                    </td>
                                    <td>
                                        {{ $allContestant -> Occupation ?? 'N/A'}}
                                    </td>
                                    <td>
                                        {{ $allContestant -> DOB ?? 'N/A'}}
                                    </td>
                                    </td>
                                    <td>
                                        {{ $allContestant -> location ?? 'N/A'}}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                        <form action="{{ route('admin.update') }}" method="POST">
                                            @csrf
                                            <button class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</button>
                                        <input type="hidden" name="id" value="{{ $allContestant -> id }}">
                                        </form>
                                        <div class="btn-group">
                                        <form action="{{ route('admin.destroy', $allContestant -> id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger ml-2"><i class="fa fa-pencil"></i> Delete</button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                    </div>
                </div>
                @endsection