<!-- Skills & Certificates -->
<div class="col-xs-12 col-sm-5">
    <div class="white-space-10"></div>

    <!-- Coding Skills -->
    <div class="block-title">
        <h3>Coding <span>Skills</span></h3>
    </div>

    <div class="skills-info skills-second-style">


        @foreach ($skills as $item)
            <!-- Skill -->
            <div class="skill clearfix">
                <h4>{{$item->name}}</h4>
                <div class="skill-value">{{$item->percent}}%</div>
            </div>
            <div class="skill-container skill-{{$item->id}}">
                <div class="skill-percentage"></div>
            </div>
            <!-- End of Skill {{$item->id}} -->
        @endforeach

    </div>
    <!-- End of Coding Skills -->
