@extends('layouts.app2')
@section('content')

<div class="md-card">
    <div class="md-card-content">
        <h3 class="heading_a">{{ __('create a class Room') }}</h3>
        <form action="{{ route('classroom.store') }}" method="post">
            @csrf
            <div class="uk-grid" data-uk-grid-margine>
                <div class="uk-width-1-1">
                    <div class="uk-form-row">
                        <label for="">{{ __('grade') }}</label>
                        <select name="grade_id" id="grade_id" data-md-selectize>
                            <option value="">{{ __('select') }}</option>
                            @foreach ($grades as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="uk-form-row">
                        <label for="">{{ __('name') }}</label>
                        <input type="text" class="md-input" name="name">
                    </div>
                    <div class="uk-form-row">
                        <button type="submit" class="md-btn md-btn-primary">{{ __('save') }}</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
