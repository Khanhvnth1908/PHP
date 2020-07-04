<?php


?>
{{--Thua ke tu app.blade template--}}

@extends('layouts.app')

{{--Noi dung trang con--}}
{{--Dung app.css--}}
@section('content')

{{--    Dinh nghia noi dung cua tranh tasks--}}
    <div class="panel-body">
        @include('error.503')
{{--        Form nhap tasks moi--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

{{--            Ten Tasks--}}
            <div class="form-group">
                <label for="tasks" class="col-sm-3 control-label">Tasks</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

{{--            Nut Tasks--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    <button type="submit" class="btn btn-submit">
                        <i class="fa fa-plus"></i>Add Tasks
                    </button>
                </div>
            </div>
        </form>
{{--    Hien thi du lieu--}}

        @if(count($tasks)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current tasks
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
{{--                        Tao tieu de cua cac cot--}}
                        <thead>
                            <td>Task</td>
                            <td>&nbsp;</td>
                        </thead>
{{--                        Tao cac dong de hien thi noi dung--}}
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$task->name}}</div>
                                    </td>
{{--                                    Them Cot xoa--}}

                                    <td>
                                        <form action="task/{{$task->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button>Delete task</button>
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

    @endsection
