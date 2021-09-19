<x-bit.input.group for="{{ $el }}-font-weight" label="{{ strtoupper($el) }} Font Weight">
    <x-bit.input.select id="{{ $el }}-font-weight" class="block w-full mt-1" name="{{ $el }}-font-weight" wire:model="form.{{ $group }}.{{ $el }}.font-weight">
        <option value="font-thin">Thin</option>
        <option value="font-extralight">Extralight</option>
        <option value="font-light">Light</option>
        <option value="font-normal">Normal</option>
        <option value="font-medium">Medium</option>
        <option value="font-semibold">Semibold</option>
        <option value="font-bold">Bold</option>
        <option value="font-extrabold">Extrabold</option>
        <option value="font-black">Black</option>
    </x-bit.input.select>
</x-bit.input.group>
