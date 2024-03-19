

@props(['Titulo','type','nombre'])

<div class="my-2">
    <label class="pr-2" for="">{{ $Titulo}}</label>
    <input type={{$type}}name={{$nombre}} class="border rounded-lg px-4">
    @error($nombre)
    <p>{{ $message}}</p>
    @enderror
</div>

