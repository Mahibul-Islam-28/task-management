@extends('layout.main')

@section('content')

<section class="my-5">
    <div class="container">
        <h2 class="text-center my-3">Task List</h2>
        <table class="table table-striped table-bordered" id="dataTable"> 
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Priority</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->name}}</td>
                    <td>{{$task->priority}}</td>
                    <td>{{$task->created_at}}</td>
                    <td>{{$task->updated_at}}</td>
                    <td>
                        <a href="{{route('edit', $task->id)}}" class="btn btn-info text-white">Edit</a>

                        <form action="{{route('delete', $task->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger my-2">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>

@endsection
