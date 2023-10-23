@extends('layouts.admin')
@section('content')
<div class="col-lg-4 col-md-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total Dosen</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
                <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                </div>
            </li>
            <li class="ms-auto"><span class="counter text-success">659</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-4 col-md-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total Prestasi</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
                <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                </div>
            </li>
            <li class="ms-auto"><span class="counter text-purple">869</span></li>
        </ul>
    </div>
</div>
<div class="col-lg-4 col-md-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total Berita</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
                <div id="sparklinedash3"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                </div>
            </li>
            <li class="ms-auto"><span class="counter text-info">911</span>
            </li>
        </ul>
    </div>
</div>
@endsection