<div class="row mb-30-none justify-content-center">
    @foreach(watching()->all() as $auction)
        <livewire:website.auction.auction-item :auction="$auction" />
    @endforeach
</div>
