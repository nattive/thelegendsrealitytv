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
                <a class="nav-link" href="{{ route('admin.index')}}">Add contestant <span class="sr-only">(current)</span></a>
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
<div class=" col-md-8 mx-auto">
    <form action="{{ route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="col-xl-12 order-xl-1">
            <div class="card shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">New Contestant </h3>
                        </div>
                        {{-- <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Contestant information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name">Name </label>
                                        <input type="text" id="name" name="name"
                                            class="form-control form-control-alternative" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" name="email" id="input-email"
                                            class="form-control form-control-alternative" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nick name</label>
                                        <input type="text" name="input_nick_name"
                                            class="form-control form-control-alternative" placeholder="Nick name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="Occupation"> Occupation </label>
                                        <input type="text" name="Occupation"
                                            class="form-control form-control-alternative" placeholder="Occupation">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="Occupation"> Gender </label>
                                        <select name="Gender[]" class="form-control form-control-alternative"> Gender
                                            <option selected disabled value="none">Select</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="Hobbies">Hobbies</label>
                                        <input type="text" name="Hobbies" class="form-control form-control-alternative"
                                            placeholder="Hobbies">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="location">location</label>
                                        <input type="text" name="location" class="form-control form-control-alternative"
                                            placeholder="location">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="photo">Picture</label>
                                        <input type="file" name="photo"
                                            class="form-control-file  form-control-alternative">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Other Short Description</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <textarea name="About" id="About" rows="4" class="form-control form-control-alternative"
                                    placeholder="A few words ..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg pull-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
@endsection