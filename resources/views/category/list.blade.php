@extends('master')

@section('content')
<table class="table">
    <a href="{{route('addNewCategory')}}" class="btn btn-primary float-end">Add new Category</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry the Bird</td>
        <td>@twitter</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection

{{-- @section('footer')
    This is footer for category list page
@endsection --}}
