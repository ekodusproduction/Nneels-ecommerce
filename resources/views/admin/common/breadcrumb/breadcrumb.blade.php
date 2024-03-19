<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Hi, welcome back!</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" style="text-transform: capitalize;"><a href="#">{{Request::segment(1)}}</a></li>
                @if (Request::segment(2) != null)
                    <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">{{Request::segment(2)}}</li>
                @endif
                @if(Request::segment(3) != null)
                    <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">{{Request::segment(3)}}</li>                    
                @endif
                
            </ol>
        </nav>
    </div>
    <div class="d-flex my-auto">
        <div class=" d-flex right-page">
            <div class="d-flex justify-content-center">
                <div class="">
                    <span class="d-block">
                        <span class="label">PROFIT</span>
                    </span>
                    <span class="value">
                        $34,000
                    </span>
                </div>
                <div class="ml-3 mt-2">
                    <span class="sparkline_bar31"></span>
                </div>
            </div>
        </div>
    </div>
</div>
