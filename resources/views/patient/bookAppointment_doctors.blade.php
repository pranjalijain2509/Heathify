<option selected="selected">Select Doctor </option>

@if ($doctors->count())
    @foreach ($doctors as $doctor)
        <option value="{{ $doctor->id }}">{{ $doctor->user->fullName }}</option>
    @endforeach
@endif
