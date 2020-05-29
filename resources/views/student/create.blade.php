@extends('layouts.app2')

@section('content')

<div class="md-card">
    <div class="md-card-content">
        <form action="{{ route('student.store') }}" method="post">
            @csrf
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-1-1">
                <div class="uk-form-row">
                    <label for="">{{ __('name') }}</label>
                    <input type="text" class="md-input" name="name">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('student_no') }}</label>
                    <input type="number" class="md-input" name="student_no">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('grade') }}</label>
                    <select name="grade_id" id="grade_id" data-md-selectize>
                        <option value="">{{ __('select') }}</option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('classroom') }}</label>
                    <select name="classroom_id" id="classroom_id" >
                    </select>
                </div>

                <div class="uk-form-row uk-input-group">
                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"> </i></span>
                    <label for="">{{ __('date_of_birth') }}</label>
                    <input type="text" name="date_of_birth" class="md-input" data-uk-datepicker="{format:'YYYY.MM.DD'}">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('notes') }}</label>
                    <textarea name="notes" id="" cols="30" rows="2" class="md-input"></textarea>
                </div>
                <div class="uk-form-row">
                    <button class="md-btn md-btn-primary" type="submit">{{ __('save') }}</button>
                </div>
            </div>

        </div>
    </form>
    </div>
</div>

@endsection


@push('scripts')
<script>
        $(document).ready(function() {
            $('#grade_id').change(function(e){
                var selected_grade_id=$(this).children("option:selected").val();

                console.log("selected grde:" + selected_grade_id);
                $.ajax({
                    url:'/grade/'+ selected_grade_id +'/classrooms',
                    success:function(result){
                        console.log(result);
                        var classrooms_option="";
                        result.forEach(item => {
                            classrooms_option += ("<option value='"+ item.id+"'>"+item.name+"</option>");
                        });

                       $("#classroom_id").html(classrooms_option);

                    }

                });

            });
        });
    </script>

@endpush



