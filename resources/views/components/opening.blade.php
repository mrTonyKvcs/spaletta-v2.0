<div class="hidden lg:flex lg:flex-row justify-start">
    <div class="w-1/4 flex md:justify-start">
        <span class="align-bottom uppercase text-gray2e text-5xl font-semibold">{{ __('Nyitvatartás') }}</span>
    </div>
    <table class="table-fixed lg:w-3/5 text-gray73">
        <thead class=" border-b-2 border-gray-200 text-2xl">
          <tr>
            <th class="pb-2">{{ __('Hétfő') }}</th>
            <th class="pb-2">{{ __('Kedd') }}</th>
            <th class="pb-2">{{ __('Szerda') }}</th>
            <th class="pb-2">{{ __('Csütörtök') }}</th>
            <th class="pb-2">{{ __('Péntek') }}</th>
            <th class="pb-2">{{ __('Szombat') }}</th>
            <th class="pb-2">{{ __('Vasárnap') }}</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center text-xl">
            <td class="pt-2">-</td>
            <td class="pt-2">-</td>
            <td class="pt-2">11:30 - 22:00</td>
            <td class="pt-2">11:30 - 22:00</td>
            <td class="pt-2">11:30 - 24:00</td>
            <td class="pt-2">11:30 - 24:00</td>
            <td class="pt-2">11:30 - 16:00</td>
          </tr>
        </tbody>
      </table>
</div>

<div class="flex flex-col mt-12 items-center w-full lg:hidden">
  <span class="uppercase text-gray2e text-5xl font-semibold mb-12">{{ __('Nyitvatartás') }}</span>
  <div class="flex justify-around uppercase text-gray73 w-full text-2xl">
    <div class="space-y-6 font-semibold">
      <p>{{ __('Hétfő') }}</p>
      <p>{{ __('Kedd') }} - {{ __('Szombat') }}</p>
      <p>{{ __('Vasárnap') }}</p>
    </div>
    <div class="space-y-6 font-medium">
      <p>{{ __('Zárva') }}</p>
      <p>11:30 - 23:00</p>
      <p>11:30 - 16:00</p>
    </div>
  </div>
</div>




      