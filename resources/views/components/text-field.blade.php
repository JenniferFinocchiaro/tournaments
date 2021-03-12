<div class="form-group">
    <label for="field-{{$name}}">{{ $label }}</label>
    <div class="input-group">
        @if($icon)
        <div class="input-group-prepend">
           {{$icon}}
        </div>
        @endif
        <input class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }}" type="text" name="{{$name}}" id="field-{{$name}}" value="">
    </div>
    @error($name)
    <div class="invalid-feedback">
       {{$message}}
    </div>
    @enderror
</div>   

