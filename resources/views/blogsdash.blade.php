@extends('layouts.app')

@section('heading')
Dashboard
@endsection

@section('pagecss')
<style>
    .activeDash {
        color: #dcdcdc;
        background: transparent;
    }
</style>
@endsection

@section('app-content')
<!-- statistics -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                        <i class="icon-camera7 font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-cyan white media-body">
                        <h5>Applications[30 Days]</h5>
                        <h5 class="text-bold-400">25</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                        <i class="icon-circle-check font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-deep-orange white media-body">
                        <h5>Total Approvals</h5>
                        <h5 class="text-bold-400">6</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                        <i class="icon-circle-cross font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-teal white media-body">
                        <h5>Total Rejections</h5>
                        <h5 class="text-bold-400">12</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                        <i class="icon-banknote font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-pink white media-body">
                        <h5>Total Payments</h5>
                        <h5 class="text-bold-400">15</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                        <i class="icon-banknote font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-pink white media-body">
                        <h5>Pending Applications</h5>
                        <h5 class="text-bold-400">15</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- statistics -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("#dashActive").addClass('active');
    });
</script>
@endsection