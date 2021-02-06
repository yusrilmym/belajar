@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('saveCategory') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="Category Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Category Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
                @if (session()->has('success'))
                    <span class="badge rounded-pill bg-success">Success input</span>
                @endif
            </div>
        </div>
    </div>
@endsection
