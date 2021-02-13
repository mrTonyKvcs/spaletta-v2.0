<!-- Activity list (smallest breakopoint only) -->
<div class="shadow sm:hidden">
    <ul class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden" x-max="1">
        <x-transaction></x-transaction>
    </ul>
    <x-pagination></x-pagination>
</div>

<!-- Activity table (small breakopoint and up) -->
<div class="hidden sm:block">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col mt-2">
        <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
            <x-table></x-table>
            <x-pagination></x-pagination>
        </div>
      </div>
    </div>
</div>