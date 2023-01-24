<!-- BEGIN: Footer-->
{{--<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span
                class="float-md-left d-block d-md-inline-block">
                {!! ($setting['footer'] ? $setting['footer'] : 'development') !!}
            <span
                    class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i>
            </span>
        </span>


    </p>
</footer>--}}

<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    {!! ($setting['footer'] ? $setting['footer'] : 'development') !!}

    <span
            class="float-md-right d-none d-lg-block" style="margin-top: -1.5em">Hand-crafted & Made with<i class="ft-heart pink"></i>
            </span>
</footer>
<!-- END: Footer-->
