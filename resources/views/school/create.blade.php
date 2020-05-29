@extends('layouts.app2')
@section('content')
<div class="md-card">
    <div class="md-card-content">
        <h3 class="heading_a">{{ __('About School') }}</h3>

        <form action="{{ route('school.store') }}" method="post">
            @csrf
            <div class="uk-grid" data-uk-grid-margine>
                <div class="uk-width-1-1">
                    <div class="uk-form-row">
                        <label for="">{{ __('name') }}</label>
                        <input type="text" name="name" class="md-input" value="{{ old('name')??'' }}">
                    </div>
                    <div class="uk-form-row">
                        <label for="">{{ __('type') }}</label>
                        <select name="type" id="type" data-md-selectize>
                            <option  selected value="" >{{ __('select') }}</option>
                            @foreach ($schoolTypes as $type)
                                <option value="{{ $type->id }}" >{{ $type->item_name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="uk-form-row">
                        <label for="">{{ __('notes') }}</label>
                        <textarea name="notes" rows="3" class="md-input" >{{ old('notes') ?? '' }}</textarea>
                    </div>
                    <div class="uk-form-row">
                        <button class="md-btn md-btn-primary" type="submit">{{ __('save') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="md-card">
    <div class="md-card-content">
        <h3 class="heading_a">{{ __('Create_a_Term') }}</h3>
        <form action="{{ route('term.store') }}" method="post">
            @csrf
            <div class="uk-grid" data-uk-grid-margine>
                <div class="uk-width-1-1">
                    <div class="uk-form-row">
                        <label for="">{{ __('name') }}</label>
                        <input type="text" class="md-input" name="name" >
                    </div>
                    <div class="uk-form-row">
                        <button type="submit" class="md-btn md-btn-primary">{{ __('save') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="md-card">
    <div class="md-card-content">
        <h3 class="heading_a">{{ __('Create_a_Grade(Class)') }}</h3>
        <form action="{{ route('grade.store') }}" method="post">
            @csrf
            <div class="uk-grid" data-uk-grid-margine>
                <div class="uk-width-1-1">
                    <div class="uk-form-row">
                        <label for="">{{ __('sn') }}</label>
                        <input type="number" class="md-input" name="sn" value="{{ old('sn') ?? '' }}" min="0">
                    </div>
                    <div class="uk-form-row">
                        <label for="">{{ __('name') }}</label>
                        <input type="text" class="md-input" name="name" value="{{ old('name')??'' }}">
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
