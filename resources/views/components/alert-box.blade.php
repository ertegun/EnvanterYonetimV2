<div class="alert alert-custom alert-{{$class}} fade show" role="alert">
    <div class="alert-icon"><i class="{{$icon}}"></i></div>
    <div class="alert-text">{{$slot}}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
