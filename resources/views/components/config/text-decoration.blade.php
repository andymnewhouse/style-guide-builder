<x-bit.input.group for="{{ $el }}-text-decoration" label="{{ strtoupper($el) }} Text Decoration">
    <x-bit.input.select id="{{ $el }}-text-decoration" class="block w-full mt-1" name="{{ $el }}-text-decoration" wire:model="form.{{ $group }}.{{ $el }}.text-decoration">
        <option value="underline">Underline</option>
        <option value="line-through">Line Through</option>
        <option value="no-underline">None</option>
    </x-bit.input.select>
</x-bit.input.group>
