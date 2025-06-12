@props(['inputName'])
<div class="m2">
     @error($inputName)
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>