
@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        @if (is_string($errors))
            {{ $errors }}
        @else
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif
