@section('title', 'تیکت ها')
<div>
    <div class="main-content" wire:init="loadInformation">
        <div class="tab__box">
            <div class="tab__items">
                <a href="{{ route('tickets.index') }}" class="tab__item is-active">@yield('title')</a>
                |
                <a class="tab__item">جستجو: </a>
                <a class="t-header-search">
                    <form action="" onclick="event.preventDefault();">
                        <input type="text" wire:model.debounce.1000="search" class="text margin-bottom-20"
                               placeholder="جستجو...">
                    </form>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 margin-left-10 margin-bottom-15 border-radius-3">
                <div class="table__box">
                    <table class="table table_ad">
                        <thead role="rowgroup">
                        <tr class="title-row">
                            <th>بخش مربوطه</th>
                            <th>محتوای تیکت</th>
                            <th></th>
                        </tr>
                        </thead>
                        @if($readyToLoad)
                            <tbody>
                            @foreach($tickets as $ticket)
                                <tr role="row">
                                    <td>{{ $ticket->ticketable->name() }}</td>
                                    <td>{!! $ticket->text !!}</td>
                                    <td class="position-relative">
                                        <div class="position-absolute bottom-0 left-0 w-100">
                                            <a href="{{ route('ticket.show', $ticket->id) }}"
                                               target="_blank"
                                               class="item-eye " title="مشاهده"></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            @if($tickets)
                                {{ $tickets->render() }}
                            @endif
                        @else
                            <div class="alert-loading">{{ __('app.loading') }}</div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
