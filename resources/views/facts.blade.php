<!-- Fun Facts -->
<div class="row">
    <div class="col-xs-12 col-sm-12">

        <div class="block-title">
            <h3>Fun <span>Facts</span></h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="fun-fact gray-default">
            <i class="lnr lnr-heart"></i>
            <h4>Happy Employers</h4>
            <span class="fun-fact-block-value">{{$companies}}</span>
            <span class="fun-fact-block-text"></span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-4">
        <div class="fun-fact gray-default">
            <i class="lnr lnr-clock"></i>
            <h4>Months Experence</h4>
            <span class="fun-fact-block-value">{{ floor(Carbon\Carbon::parse($firstJobStartDate)->diffInMonths()) }}</span>
            <span class="fun-fact-block-text"></span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-4 ">
        <div class="fun-fact gray-default">
            <i class="lnr lnr-briefcase"></i>
            <h4>Current Role</h4>
            <span class="fun-fact-block-value">{{$experiences->first()->title}}</span>
            <span class="fun-fact-block-text"></span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-4 ">
        <div class="fun-fact gray-default">
            <i class="lnr lnr-graduation-hat"></i>
            <h4>Highest Qualification</h4>
            <span class="fun-fact-block-value sp-small">{{$education->first()->course}}</span>
            <span class="fun-fact-block-text"></span>
        </div>
    </div>

    <div class="col-xs-12 col-sm-4 ">
        <div class="fun-fact gray-default">
            <i class="lnr lnr-laptop"></i>
            <h4>Current Company</h4>
            <span class="fun-fact-block-value">{{$experiences->first()->company}}</span>
            <span class="fun-fact-block-text"></span>
        </div>
    </div>
</div>
<!-- End of Fun Facts -->