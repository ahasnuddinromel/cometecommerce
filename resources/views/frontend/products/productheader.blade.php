@php
    $com_info = App\Models\CompanyInfo::find(1)
@endphp

<div class="shop-menu">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="upper">{{  $com_info ->slogan }}</h3>
        </div>
        <div class="col-sm-3">
          <div class="form-select">
            <select name="type" class="form-control">
              <option selected="selected" value="">Sort By</option>             
            </select>
          </div>
        </div>
      </div>
</div>
            <!-- end of row-->



