@if ($errors->any())
<div class="md-card md-card-danger">
    <div class="md-card-content">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
