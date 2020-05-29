@extends('layouts.app2')
@section('content')

<div class="md-card">
    <div class="md-card-content">
        <form action="{{ route('term.store') }}" method="post">
            @csrf
            <div class="uk-grid"data-uk-grid-margin>
              <div class="uk-width-1-2">
                <div class="uk-form-row">
                    <label for="">{{ __('name') }}</label>
                    <input type="text" class="md-input" name="name">
                </div>
                <div class="form-row">
                    <label for="">{{ __('start_at') }}</label>

                </div>
            </div>

            <div class="uk-width-1-2">
                <div class="uk-form-row">
                    <button type="submit" class="md-btn md-btn-primary" >{{ __('save') }}</button>
                </div>
            </div>

        </div>

        </form>
    </div>
</div>

@endsection
