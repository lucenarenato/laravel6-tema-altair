@extends('layouts.app2')

@section('content')

<div class="md-card">
    <div class="md-card-content">
        <h3 class="heading_a">{{ __('students') }}</h3>
            <div class="uk-overflow-container">
            <table  class="uk-table uk-text-nowrap uk-table-striped" id="students_table">
                <thead>
                    <tr>
                        <th>{{ __('name') }}</th>
                        <th>{{ __('student_no') }}</th>
                        <th>{{ __('grade') }}</th>
                        <th>{{ __('classroom') }}</th>
                        <th>{{ __('date_of_birth') }}</th>
                        <th>{{ __('edit') }}</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
</div>

@endsection

@push('scripts')
<script>
    $(function(){
        $('#students_table').DataTable({
            processing:true,
            serverSide:true,
            ajax:"{!! route('student.getStudents') !!}",
            columns:[
                {data:'name',name:'name'},
                {data:'student_no',name:'student_no'},
                {data:'grade',name:'grade',orderable:true, searchable:true},
                {data:'classroom',name:'classroom' },
                {data:'date_of_birth',name:'date_of_birth'},
                {data: 'edit', name: 'edit', orderable: false, searchable: false},
            ]
        });

    });
</script>
@endpush
