<!-- Skills & Certificates -->
<div class="col-xs-12 col-sm-5">
    <div class="white-space-10"></div>

    <!-- Coding Skills -->
    <div class="block-title">
        <h3>Coding <span>Skills</span></h3>
    </div>

    <div class="skills-info skills-second-style">


        @foreach ($skills as $skill)
            <!-- Skill -->
            <div class="skill clearfix">
                <h4>{{$skill->name}}</h4>
                <div class="skill-value">{{$skill->percent}}%</div>
            </div>
            <div class="skill-container skill-{{$skill->id}}">
                <div class="skill-percentage"></div>
            </div>
            <!-- End of Skill {{$skill->id}} -->
        @endforeach

    </div>
    <!-- End of Coding Skills -->
