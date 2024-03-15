<div class="block-title">
    <h3>Education</h3>
</div>

<div class="timeline timeline-second-style clearfix">
    @foreach ($education as $item)
    <div class="timeline-item clearfix">
        <div class="left-part">
            <h5 class="item-period">{{ \Carbon\Carbon::parse($item->date)->format("Y")}}</h5>
            <span class="item-company">{{$item->university}}</span>
        </div>
        <div class="divider"></div>
        <div class="right-part">
            <h4 class="item-title">{{$item->course}}</h4>
            <p>{{$item->description}}</p>
        </div>
    </div>
    @endforeach
</div>
