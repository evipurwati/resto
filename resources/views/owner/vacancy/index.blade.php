@extends('templates.owner.owner_default')

@section('title')
<h2>Job Vacancy</h2>
@endsection

@section('content')
<div class="card mb-3 border-0">
    <a href="{{ route('owner.vacancy.create') }}" class="btn btn-primary mr-0 ml-auto">New Vacancy</a>
</div>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        @include('layouts.alert')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>#</th>
                    <th>Position</th>
                    <th>Job Description</th>
                    <th>Requirement</th>
                    <th>Salary</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($vacancies as $vacancy)
                        <tr>
                            <th scope="row">{{ $no }}</th>
                            <td>{{ $vacancy->position }}</td>
                            <td>{{ $vacancy->job_desc }}</td>
                            <td>{{ $vacancy->requirement }}</td>
                            <td>{{ $vacancy->salary }}</td>
                            <td>
                                <a href="{{ route('owner.vacancy.edit', $vacancy) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('owner.vacancy.destroy', $vacancy) }}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        @php
                            $no++
                        @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Position</th>
                        <th>Job Description</th>
                        <th>Requirement</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
</div>
@endsection