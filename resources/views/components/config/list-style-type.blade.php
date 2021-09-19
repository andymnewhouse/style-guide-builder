<x-bit.input.group for="{{ $el }}-list-style-type" label="{{ strtoupper($el) }} List Style Type">
    <x-bit.input.select id="{{ $el }}-list-style-type" class="block w-full mt-1" name="{{ $el }}-list-style-type" wire:model="form.{{ $group }}.{{ $el }}.list-style-type">
        <option value="list-none">None</option>
        <option value="list-disc">Disc</option>
        <option value="list-decimal">Decimal</option>
    </x-bit.input.select>
</x-bit.input.group>
