<x-bit.input.group for="{{ $el }}-margin-bottom" label="{{ strtoupper($el) }} Margin Bottom">
    <x-bit.input.select id="{{ $el }}-margin-bottom" class="block w-full mt-1" name="{{ $el }}-margin-bottom" wire:model="form.{{ $group }}.{{ $el }}.margin-bottom">
        <option value="mb-0">None</option>
        <option value="mb-1">0.25 rem</option>
        <option value="mb-2">0.50 rem</option>
        <option value="mb-3">0.75 rem</option>
        <option value="mb-4">1 rem</option>
        <option value="mb-4">1 rem</option>
        <option value="mb-5">1.25 rem</option>
        <option value="mb-6">1.5 rem</option>
        <option value="mb-7">1.75 rem</option>
        <option value="mb-8">2 rem</option>
        <option value="mb-9">2.25 rem</option>
        <option value="mb-10">2.5 rem</option>
        <option value="mb-11">2.75 rem</option>
        <option value="mb-12">3 rem</option>
    </x-bit.input.select>
</x-bit.input.group>
