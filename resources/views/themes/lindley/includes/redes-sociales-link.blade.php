
<div class="face-share text-center ">
    <a href="https://facebook.com/sharer.php?u={{ url()->current() }}" target="new"
       title="Grupo Tawa en Facebook"><i class="fa1 fa-facebook faceshare"></i></a>
    <a href="https://twitter.com/share" target="new"><i class="fa1 fa-twitter twittershare"
                                                        title="Grupo Tawa en Twitter"></i></a>
    <a href="https://plus.google.com/share?url={{ url()->current() }}" target="new"
       title="Grupo Tawa en Google plus"><i class="fa1 fa-google-plus googleshare"></i></a>
    <a href="https://www.linkedin.com/cws/share?url={{ url()->current() }}" target="new"
       title="Grupo Tawa en Linkedin"><i class="fa1 fa-linkedin linkedinshare"></i></a>
    <a href="http://pinterest.com/pin/create/bookmarklet/?url={{ url()->current() }}" target="new" title="Grupo Tawa en Pinterest"><i class="fa1 fa fa-pinterest-p pinterestshare"></i></a>
    <div class="fb-like" data-href="{{ url()->current() }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
</div>