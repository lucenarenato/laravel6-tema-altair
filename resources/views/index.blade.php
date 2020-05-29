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
                    <input type="text" class="md-input">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('student_no') }}</label>
                    <input type="number" class="md-input">
                </div>
                <div class="uk-form-row">
                    <label for="">{{ __('class') }}</label>
                    <select name="class" id="" data-md-selectize>
                        <option value="">{{ __('select') }}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="uk-form-row uk-input-group">
                    <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"> </i></span>
                    <label for="">{{ __('date_of_birth') }}</label>
                    <input type="text" class="md-input" data-uk-datepicker="{fromat:'DD.MM.YYYY'}">
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
            // create DatePicker from input HTML element
            $("#datepicker").kendoDatePicker();
        });
    </script>

@endpush



