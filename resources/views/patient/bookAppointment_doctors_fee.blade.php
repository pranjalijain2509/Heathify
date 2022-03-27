@if ($doctors->count())
    @foreach ($doctors as $doctor)
        <option value="{{ $doctor->fee }}">₹ {{ $doctor->fee }}</option>
    @endforeach
@endif
