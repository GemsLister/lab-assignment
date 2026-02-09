@props(['label', 'id', 'type', 'name', 'autocomplete' => 'off'])

<div class="flex flex-col">
    <label for="{{ $name }}" class="text-sm">{{$label}}</label>
    <input id="{{ $id }}" type="{{ $type }}" name="{{ $name }}" autocomplete="{{ $autocomplete }}" class="border-gray-300 rounded-md shadow-sm" required>
</div>