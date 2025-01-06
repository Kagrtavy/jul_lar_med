@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="{{ route('task.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Create new task</a>
                    @if (count($tasks) > 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Task list
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped task-table">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td class="table-text">
                                                <div>{{ $task->name }}</div>
                                            </td>

                                            <td>
                                                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i></a>
                                                <form action="{{ route('task.destroy', $task->id) }}" method="post" style="display: inline;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
