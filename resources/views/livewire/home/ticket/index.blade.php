@section('title', 'تیکت ها')
<div>
    <main class="body" wire:init="loadInformation">
        <div class="container post_container" style="margin-top: 200px">
            <div class="d-flex jsc-space-between containerPage">
                <livewire:home.profile.sidebar/>
                <div class="content">
                    <div class="card border-0 font-size-14">
                        <div class="card-header mb-4 pb-0">
                            <div class="d-flex jsc-space-between alc-center">
                                <h1 class="form_title">@yield('title')</h1>
                            </div>
                        </div>
                        <div class="card-body d-flex w-div-32 jsc-space-between p-0 m-0">
                            <div class="d-flex w-div-32 jsc-start flex-wrap flex-grow-1 h-fit-content">
                                <div class="table__box w-100" wire:init="loadInformation">
                                    <table class="table table_ad">
                                        @if($readyToLoad)
                                            <thead role="rowgroup">
                                            <tr class="title-row">
                                                <th>بخش مربوطه</th>
                                                <th>محتوای تیکت</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($tickets)
                                                @foreach($tickets as $ticket)
                                                    <tr role="row">
                                                        <td>{{ $ticket->ticketable->modelTitle() }}</td>
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
                                            @endif
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
            </div>
        </div>
    </main>
</div>
