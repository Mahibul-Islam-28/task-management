@extends('layout.main')

@section('content')
<section class="m-5">

    <div class="container">
        <form action="" method="post">

            @csrf
            <label for="name">Task Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control" value="{{$task->name}}">
            
            <label for="priority" class="mt-3">Priority</label>
            <input type="number" name="priority" placeholder="Name" class="form-control" value="{{$task->priority}}">

            <input type="submit" value="Update" class="btn btn-warning text-white mt-3">
        </form>
    </div>

</section>
@endsection
