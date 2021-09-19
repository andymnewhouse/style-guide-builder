<x-bit.input.group for="{{ $el }}-margin-top" label="{{ strtoupper($el) }} Margin Top">
    <x-bit.input.select id="{{ $el }}-margin-top" class="block w-full mt-1" name="{{ $el }}-margin-top" wire:model="form.{{ $group }}.{{ $el }}.margin-top">
        <option value="mb-0">None</option>
        <option value="mt-1">0.25 rem</option>
        <option value="mt-2">0.50 rem</option>
        <option value="mt-3">0.75 rem</option>
        <option value="mt-4">1 rem</option>
        <option value="mt-4">1 rem</option>
        <option value="mt-5">1.25 rem</option>
        <option value="mt-6">1.5 rem</option>
        <option value="mt-7">1.75 rem</option>
        <option value="mt-8">2 rem</option>
        <option value="mt-9">2.25 rem</option>
        <option value="mt-10">2.5 rem</option>
        <option value="mt-11">2.75 rem</option>
        <option value="mt-12">3 rem</option>
    </x-bit.input.select>
</x-bit.input.group>
