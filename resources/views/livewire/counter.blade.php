<div class="p-4 border border-gray-300 rounded-lg bg-white shadow-md justify-center items-center text-center">
    <h1 class="text-xl "> ini adalah counter </h1>
    <h2 class="text-lg font-semibold mb-2">Counter: {{ $count }}</h2>
    <div class="space-x-2">
        <button wire:click="increment" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Increment</button>
        @if ($count > 0)
            <button wire:click="resetCounter" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Reset</button>
            <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Decrement</button>
        @endif
    </div>      
</div>
