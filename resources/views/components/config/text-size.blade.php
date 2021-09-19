<x-bit.input.group for="{{ $el }}-text-size" label="{{ strtoupper($el) }} Text Size">
    <x-bit.input.select id="{{ $el }}-text-size" class="block w-full mt-1" name="{{ $el }}-text-size" wire:model="form.{{ $group }}.{{ $el }}.text-size">
        <option value="text-xs">Extra Small</option>
        <option value="text-sm">Small</option>
        <option value="text-base">Base</option>
        <option value="text-lg">Large</option>
        <option value="text-xl">Extra Large</option>
        <option value="text-2xl">2XL</option>
        <option value="text-3xl">3XL</option>
        <option value="text-4xl">4XL</option>
        <option value="text-5xl">5XL</option>
        <option value="text-6xl">6XL</option>
        <option value="text-7xl">7XL</option>
        <option value="text-8xl">8XL</option>
        <option value="text-9xl">9XL</option>
    </x-bit.input.select>
</x-bit.input.group>
