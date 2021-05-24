<div class="alert alert-custom alert-{{$class}} fade-in-down" role="alert">
    <div class="progress bg-{{$class}}">
        <div class="progress-bar progress-bar-striped bg-{{$class}}" role="progressbar" style="width: 100%"></div>
    </div>
    <div class="alert-icon"><i class="{{$icon}}"></i></div>
    <div class="alert-text">{{$slot}}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
