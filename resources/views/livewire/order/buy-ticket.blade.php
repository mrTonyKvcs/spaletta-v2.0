<div>
	<div class="w-full mb-10">
		@include('flash-message')
	</div>
    <div class="flex flex-col p-4 py-5 mt-5 bg-gray-100 shadow md:flex-row">
        <div class="overflow-hidden md:w-1/2 md:mr-8">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-3xl font-medium leading-6 text-gray-900">Számlázási adatok</h3>
            </div>

            <x-form.ticket-personal-data />
        </div>

        <div class="mt-10 overflow-hidden md:mt-0 md:w-1/2 md:mr-8">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-3xl font-medium leading-6 text-gray-900">Jegyvásárlás</h3>
            </div>

            <x-order.ticket-calculator/>

            <div class="px-4 py-5">
                <div class="py-4 mt-1 text-2xl sm:py-5 sm:px-6">
                    <p class="mb-10"><strong>Fízetési mód:</strong> Bankkártya</p>
                    <a href="http://simplepartner.hu/PaymentService/Fizetesi_tajekoztato.pdf" target="_blank" class="text-center">
                        <img width="70%" height="auto" src="/images/simplepay.png" title=" SimplePay - Online bankkártyás fi
                                    zetés" alt=" SimplePay vásárlói tájékoztató">
                    </a>
                </div>
                
                <div class="flex items-start py-4 mt-1 sm:py-5 sm:px-6">
                    <div class="flex items-center mt-1 h-7">
                        <input id="comments" wire:model="invoiceData.gdpr" name="gdpr" type="checkbox" class="text-gray-600 border-gray-300 rounded w-7 h-7 focus:ring-gray-500">
                    </div>
                    <div>
                        <div class="ml-3 text-2xl">
                            <label for="comments" class="font-medium text-gray-700">Elfogadom a feltételeket</label>
                            <p class="text-gray-500">A "Jegyvásárlás" gomb megnyomásával Ön elfogadja az <a href="/pdfs/aszf.pdf" class="text-gold" target="_blank">Általános Szerződési Feltételeket, az Adatkezelési Szabályzatot</a>, a 45/2014. (II. 26) Korm. rendelet 15. §-a szerinti tájékoztatást, <a href="/pdfs/adattovabbitasi-nyilatkozat.pdf" class="text-gold" target="_blank">Adattovábbítási nyilatkozatot</a>  valamint kijelenti, hogy elmúlt 18 éves. </p>
                        </div>
                        @error('invoiceData.gdpr') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="py-3 mt-8 text-right ">
        <button wire:click="submit" wire:loading.class="hidden" type="submit" class="inline-flex justify-center px-4 py-2 text-2xl font-medium text-white uppercase border border-transparent rounded-md shadow-sm bg-gold hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Jegyvásárlás
        </button>
        <div wire:loading class="text-2xl uppercase">
            Jegyvásárlás folyamatban...
        </div>
    </div>

</div>
