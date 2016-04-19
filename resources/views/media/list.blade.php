@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('messages.media.title') }}</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{ trans('messages.media.list.image') }}</th>
                                <th>{{ trans('messages.media.list.name') }}</th>
                                <th>{{ trans('messages.media.list.author') }}</th>
                                <th>{{ trans('messages.media.list.publish') }}</th>
                                <th>{{ trans('messages.media.list.actions') }}</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach ($media as $m)
                                <tr>
                                    <td>{{ $m->id }}</td>
                                    <td><img src=""></td>
                                    <td>{{ $m->name }}</td>
                                    <td>{{ $m->author->name }}</td>
                                    <td>{{ date('d/m/Y H:i', strtotime($m->publish)) }}</td>
                                    <td>
                                        <a href="{{ url('midia', [ $m->slug ]) }}" target="_self" class="btn btn-default"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
