@extends('admin/master')

@section('title')
Nature List
@endsection

@section('content')
<div class="container" style="min-height:550px">
    <h3 class="text-center my-3 font-weight-bold">Job Nature List </h3><a href="{{ route('natures.create') }}" class="float-right btn btn-outline-success">add new natures</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nature Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($natures as $nature)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $nature->name }}</td>
                <td>
                   <a href="{{route('natures.edit',$nature->id)}}" class="btn btn-warning">Edit</a>

                   <form action="{{route('natures.destroy',$nature->id)}}" onsubmit="return confirm('Are You Sure To Delete?')" class="d-inline-block" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-info" type="submit">Delete</button>


                </form>
            </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
