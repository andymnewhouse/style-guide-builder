<x-bit.input.group for="{{ $el }}-text-transform" label="{{ strtoupper($el) }} Text Transform">
    <x-bit.input.select id="{{ $el }}-text-transform" class="block w-full mt-1" name="{{ $el }}-text-transform" wire:model="form.{{ $group }}.{{ $el }}.text-transform">
        <option value="uppercase">Uppercase</option>
        <option value="lowercase">Lowercase</option>
        <option value="capitalize">Capitalize</option>
        <option value="normal-case">Normal Case</option>
    </x-bit.input.select>
</x-bit.input.group>
