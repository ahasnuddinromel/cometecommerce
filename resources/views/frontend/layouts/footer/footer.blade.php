<footer id="footer-widgets">
        <div class="container">
            <div class="go-top">
                <a href="#top">
                <i class="ti-arrow-up"></i>
                </a>
            </div>

            {{-- Footer Top --}}
            <div class="row">
                @include('frontend.layouts.footer.footeritem.footerinfo')

                @include('frontend.layouts.footer.footeritem.subscribe')
            </div>
            {{--End of Footer Top --}}
        </div>
 </footer>
    {{-- Footer Bottom --}}
  <footer id="footer">
        <div class="container">
            <div class="footer-wrap">
                <div class="row">

                    @include('frontend.layouts.footer.footeritem.copyright')

                    @include('frontend.layouts.footer.footeritem.footermenu')

                    @include('frontend.layouts.footer.footeritem.social')

                </div>
            </div>
        </div>
  </footer>
    {{--End of Footer Bottom --}}
