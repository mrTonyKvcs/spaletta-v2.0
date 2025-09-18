@section('title')
    {{ __('Sikeres vásárlás') }}
@endsection

@section('meta_data')
    <meta name="description"
        content="{{ __('Foglaljon asztalt online vagy telefonon a kecskeméti Spaletta Étterembe, várunk mindenkit sok szeretettel.') }}">
    <meta property="og:description"
        content="{{ __('Foglaljon asztalt online vagy telefonon a kecskeméti Spaletta Étterembe, várunk mindenkit sok szeretettel.') }}">
    <meta property="og:url" content="https://spalettaetterem.com/asztalfoglalas">
@endsection

<x-layout>
    <x-header background="reservation">
        {{ __('Jegyek letöltése') }}
    </x-header>

    <x-section>
        <div class="">
            <div class="overflow-hidden bg-white shadow">
                <div class="px-4 pb-5 sm:p-6">

                    <h3
                        class="pb-3 mb-5 text-3xl text-center uppercase border-b border-opacity-25 border-gold text-gold">
                        {{ __('Rendelés adatai') }}</h3>

                    <div class="mt-5 text-3xl">{{ __('SimplePay tranzakció azonosító') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->transaction->transaction_id }}</span></div>
                    <div class="mt-5 text-3xl">{{ __('Esemény neve') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->event->title }}</span></div>
                    <div class="mt-5 text-3xl">{{ __('Rendelésazonosító') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->order_number }}</span></div>
                    <div class="mt-5 text-3xl">{{ __('Fizetési mód') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->payment->name }}</span></div>
                    <div class="mb-5 text-3xl">{{ __('Jegyek') }}:
                        @foreach ($ticket->sold as $type)
                            <div class="ml-5 text-3xl font-bold">{{ $type->category->name }}:
                                {{ $type->price . 'Ft/DB' }} {{ $type->quantity }}db</div>
                        @endforeach
                    </div>
                    <div class="mb-5 text-3xl">{{ __('Összesen fizetendő') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->total }} Ft</span></div>
                    <div class="my-5 text-3xl">{{ __('Név') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->name }}</span></div>
                    <div class="my-5 text-3xl">{{ __('Telefonszám') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->phone_number }}</span></div>
                    <div class="my-5 text-3xl">{{ __('Email cím') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->email }}</span></div>
                    <div class="mb-5 text-3xl">{{ __('Szállítási cím') }}: <span
                            class="ml-5 text-3xl font-bold">{{ $ticket->address }}</span></div>
                </div>

            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-5 w-full mt-8">
            @for ($i = 1; $i <= 4; $i++)
                <div class="w-full"
                    style="
                           background-color:#FCFCFC;
                             border-top:3px solid #d5a24a;
                                 border-right:3px solid #d5a24a;
                                 border-bottom:3px solid #d5a24a;
                                 border-left:3px solid #d5a24a; padding-bottom: 24px;">
                    <div id="ticket-{{ $i }}"
                        style="
                                background-color:#FCFCFC;
                                background-clip:padding-box;
                                padding:24px 5px;
                                font-size:18px;">
                        <div style="text-align: center">
                            <h3 style="font-weight: bold; color: #d5a24a; margin-top: 0">{{ $ticket->event->title }}
                            </h3>
                            <h3 style="font-weight: 600; color: #A0A0A0; margin-bottom: 0">
                                {{ $ticket->event->started_at }}</h3>
                        </div>
                        <div style="display: flex; justify-content: space-around; align-items: center; margin: 20px 0;">
                            <dl style="color: #585858">
                                <dt style="font-weight: bold">Vásárló neve:</dt>
                                <dd style="margin-bottom: 7px">{{ $ticket->name }}</dd>
                                <dt style="font-weight: bold">Jegy sorszáma</dt>
                                <dd>{{ $i }}. jegy</dd>
                            </dl>
                            <img src="/images/logo/logo-xl.png" alt="" height="100px" width="100px">
                        </div>
                        <p style="text-align: center; font-weight: 600; color: #A0A0A0">{{ $ticket->order_number }}
                        </p>
                    </div>
                    <div style="text-align: center; margin-top: 10px;">
                        <button onclick="downloadTicket({{ $i }})"
                            style="background-color: #ffb606; color: #fff; padding: 6px 12px; border: none; cursor: pointer; font-size: 16px; text-transform: uppercase; font-weight: 600;">Letöltés</button>
                    </div>
                </div>
            @endfor
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
        <script>
            function downloadTicket(ticketId) {
                const ticket = document.getElementById(`ticket-${ticketId}`);
                html2canvas(ticket, {
                    useCORS: true,
                    width: 634,
                    height: 300,
                    scale: 1,
                    windowWidth: 1634,
                    windowHeight: 1234
                }).then(canvas => {
                    // Új vászon létrehozása a vízjelhez
                    const finalCanvas = document.createElement('canvas');
                    finalCanvas.width = 634;
                    finalCanvas.height = 300;
                    const ctx = finalCanvas.getContext('2d');

                    // Eredeti kép másolása az új vászonra
                    ctx.drawImage(canvas, 0, 0);

                    // Vízjel kép betöltése
                    const watermark = new Image();
                    watermark.src = '/images/logo/logo-xl.png'; // Vízjel kép elérési útja
                    watermark.onload = () => {
                        // Vízjel pozicionálása és átlátszóság beállítása
                        ctx.save();
                        ctx.globalAlpha = 0.3; // Félig átlátszó vízjel
                        ctx.translate(317, 157); // Középre pozicionálás
                        ctx.rotate(-Math.PI / 4); // 45 fokos elforgatás
                        ctx.drawImage(watermark, -50, -50, 100, 100); // Kép mérete és pozíciója
                        ctx.restore();

                        // Letöltés
                        const link = document.createElement('a');
                        link.download = `spaletta-ticket-${ticketId}.png`;
                        link.href = finalCanvas.toDataURL('image/png');
                        link.click();
                    };
                });
            }
        </script>
    </x-section>
</x-layout>
