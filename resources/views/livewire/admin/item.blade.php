<div>
    <h2 class="px-4 mx-auto mt-10 text-3xl font-medium text-center text-gray-900 uppercase max-w-8xl leading-6 sm:px-6 lg:px-8">ÖSSZES TERmék</h2>
    <div class="flex items-center justify-center mb-10">
        <form class="flex flex-row items-center justify-center" wire:submit.prevent="importItems">
            <input class="px-5 py-4 mt-10 mr-5 text-xl font-medium text-center bg-white border-b border-gray-300 outline-none gray" type="name" wire:model="typeName" />
            <div class="flex mt-10 mr-10 text-sm text-gray-600">
                <label for="file-upload" class="relative text-2xl font-medium text-indigo-600 bg-white cursor-pointer rounded-md hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span>Etlap feltoltese</span>
                    <input id="file-upload" wire:model="upload" name="file-upload" type="file" class="sr-only">
                </label>
            </div>
            <x-button submit="true">TERMÉKEK IMPORTÁLÁSA</x-button>
        </form>
    </div>
</div>
