@php
    $social = App\Models\Social::find(1)
@endphp


<div class="col-md-4">
    <div class="footer-social">
      <ul>
        <li>
          <a target="_blank" href="{{ $social-> facebook }}"><i class="ti-facebook"></i></a>
        </li>
        <li>
          <a target="_blank" href="{{ $social-> twitter }}"><i class="ti-twitter-alt"></i></a>
        </li>
        <li>
          <a target="_blank" href="{{ $social-> linkedin }}"><i class="ti-linkedin"></i></a>
        </li>
        <li>
          <a target="_blank" href="{{ $social-> instagram }}"><i class="ti-instagram"></i></a>
        </li>
        <li>
          <a target="_blank" href="{{ $social-> google_plas }}"><i class="ti-google"></i></a>
        </li>
      </ul>
    </div>
  </div>
