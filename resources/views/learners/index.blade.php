@extends('base')

@section('content')

@include('info')

<div class="float-right">
    <a href="{{ '/learners/create' }}">
    <button class="button"><span>+ Learner </span></button>
    </a>
</div>

<h1>Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td><a href="{{url('/learners/edit', ['id'=>$ln])}}" class="btn btn-sm"><button class="button"><span>Edit </span></button></td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
