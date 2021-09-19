<x-bit.input.group for="{{ $el }}-list-style-position" label="{{ strtoupper($el) }} List Style Position">
    <x-bit.input.select id="{{ $el }}-list-style-position" class="block w-full mt-1" name="{{ $el }}-list-style-position" wire:model="form.{{ $group }}.{{ $el }}.list-style-position">
        <option value="list-inside">Inside</option>
        <option value="list-outside">Outside</option>
    </x-bit.input.select>
</x-bit.input.group>
