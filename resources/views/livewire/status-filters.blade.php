{{--<nav class="hidden md:flex items-center justify-between text-gray-400 text-xs">--}}
{{--    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">--}}
{{--        <li><a wire:click.prevent="setStatus('All')" href="{{ route('idea.index', ['status' => 'All']) }}" class="border-b-4 pb-3 hover:border-blue @if ($status === 'All') border-blue text-gray-900 @endif">All ({{ $statusCount['all_statuses'] }})</a></li>--}}
{{--        <li><a wire:click.prevent="setStatus('Considering')" href="{{ route('idea.index', ['status' => 'Considering']) }}" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Considering') border-blue text-gray-900 @endif">SALE ({{ $statusCount['considering'] }})</a></li>--}}
{{--        <li><a wire:click.prevent="setStatus('In Progress')" href="{{ route('idea.index', ['status' => 'In Progress']) }}" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'In Progress') border-blue text-gray-900 @endif">RENT ({{ $statusCount['in_progress'] }})</a></li>--}}
{{--    </ul>--}}

{{--    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">--}}
{{--        <li><a wire:click.prevent="setStatus('Implemented')" href="{{ route('idea.index', ['status' => 'Implemented']) }}" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Implemented') border-blue text-gray-900 @endif">SHORT TERM ({{ $statusCount['implemented'] }})</a></li>--}}
{{--        <li><a wire:click.prevent="setStatus('Closed')" href="{{ route('idea.index', ['status' => 'Closed']) }}" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Closed') border-blue text-gray-900 @endif">NOT AVAILABLE ({{ $statusCount['closed'] }})</a></li>--}}
{{--    </ul>--}}
{{--</nav>--}}
<nav>

    <ul class="flex flex-row uppercase font-semibold border-b-4 pb-3 text-xs space-x-5">

        {{--        <li><a wire:click.prevent="setStatus('Open')" href="{{ route('idea.index', ['status' => 'Open']) }}"
        class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-green1 @if ($status === 'Open')
         border-green1 text-gray-900 @endif">Sale ({{ $statusCount['open'] }})</a></li>--}}

        <li>
            <a wire:click.prevent="setStatus('All')" href="{{ route('idea.index', ['status' => 'All']) }}"
               class="border-b-4 text-xs @if ($status === 'All') border-green1 text-gray-900 @endif">
                All
            </a>
        </li>
        <li><a wire:click.prevent="setStatus('For Sale')" href="{{ route('idea.index', ['status' => 'For Sale']) }}"
               class=" transition duration-150 ease-in border-b-4 text-xs @if ($status === 'For Sale') border-green1 text-gray-900 @endif">
                Sale </a></li>

        <li><a wire:click.prevent="setStatus('For Rent')" href="{{ route('idea.index', ['status' => 'For Rent']) }}"
               class=" transition duration-150 ease-in border-b-4 text-xs @if ($status === 'For Rent') border-green1 text-gray-900 @endif">
                Rent </a></li>
        <li><a wire:click.prevent="setStatus('Short Term')" href="{{ route('idea.index', ['status' => 'Short Term']) }}"
               class=" transition duration-150 ease-in border-b-4 text-xs @if ($status === 'Short Term') border-green1 text-gray-900 @endif">
                Short Term</a></li>
    </ul>

</nav>
