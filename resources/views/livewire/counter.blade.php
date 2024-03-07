<div>
    <div class="bg-white p-8 rounded-lg shadow-md max-w-xl w-full">
        <h1 class="text-2xl font-semibold mb-6">Tradutor</h1>

        <div class="mb-6">
            <label for="inputText" class="block text-sm font-medium text-gray-600 mb-2">Digite o texto:</label>
            <textarea id="inputText"
                class="resize-none border rounded-md w-full p-2 focus:outline-none focus:border-blue-500" rows="4"
                placeholder="Insira o texto a ser traduzido..." wire:model.blur='message'></textarea>
        </div>

        <div class="mt-8">
            <label for="outputText" class="block text-sm font-medium text-gray-600 mb-2">Texto Traduzido:</label>
            <div id="outputText"
                class="border rounded-md p-4 h-32 overflow-y-auto bg-gray-50 focus:outline-none focus:border-blue-500">
                {{$translation}}
            </div>

            @if ($translation)

            <div class="flex items-center">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 12h16M6 6h8v12H6z"></path>
                    </svg>
                    Copiar
                </button>
            </div>

            @endif
        </div>
    </div>

    <div wire:poll.500ms>
        sexo
    </div>

</div>