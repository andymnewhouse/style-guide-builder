<x-bit.input.group for="{{ $el }}-rounded" label="{{ strtoupper($el) }} Rounding">
    <x-bit.input.select id="{{ $el }}-rounded" class="block w-full mt-1" name="{{ $el }}-rounded" wire:model="form.{{ $group }}.{{ $el }}.rounded">
        <option value="rounded-none">None</option>
        <option value="rounded-sm">Small</option>
        <option value="rounded">Base</option>
        <option value="rounded-md">Medium</option>
        <option value="rounded-lg">Large</option>
        <option value="rounded-full">Full</option>
    </x-bit.input.select>
</x-bit.input.group>
