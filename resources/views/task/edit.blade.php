@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Task</div>
                    <div class="panel-body">
                        <form action="{{ route('task.update', $task->id) }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name }}">
                                </div>
                            </div>
                            @if ($errors->has('name'))
                                <div class="form-group">
                                    <div class="bg-danger col-md-offset-3 col-sm-6">{{ $errors->first('name') }}</div>
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> Save Task</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
