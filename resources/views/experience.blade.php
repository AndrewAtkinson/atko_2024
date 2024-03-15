<div class="block-title">
    <h3>Experience</h3>
</div>

<div class="timeline timeline-second-style clearfix">
    @foreach ($experiences as $item)
    <div class="timeline-item clearfix">
        <div class="left-part">
            <h5 class="item-period">{{ \Carbon\Carbon::parse($item->start_date)->format('Y')}} - {{ $item->end_date ? \Carbon\Carbon::parse($item->end_date)->format('Y') : 'Present'}}</h5>
            <span class="item-company">{{ $item->company }}</span>
        </div>
        <div class="divider"></div>
        <div class="right-part">
            <h4 class="item-title">{{ $item->title }}</h4>
            <p>{{ $item->description }}</p>
        </div>
    </div>
    @endforeach
</div>
