@extends('client.inbox.base')

@section('inbox_content')
    <div class="page-actions">
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left avatar"><img src="../build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                    <div style="width:auto" class="media-body">
                        <h5 class="media-heading">Helen Sullivan</h5>
                        <p class="text-muted mb-0"><a href="#">helen_93@gmail.com</a> to me</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div role="toolbar" aria-label="Toolbar with button groups" class="btn-toolbar inline-block">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline btn-default">Reply</button>
                        <button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-outline btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul role="menu" class="dropdown-menu pull-right animated fadeInDown">
                            <li><a href="#">Reply</a></li>
                            <li><a href="#">Reply To All</a></li>
                            <li><a href="#">Forward</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Mark as spam</a></li>
                            <li><a href="#">Mark as unread</a></li>
                            <li><a href="#">Delete this message</a></li>
                        </ul>
                    </div>
                    <div role="group" aria-label="Second group" class="btn-group">
                        <button type="button" class="btn btn-outline btn-default"><i class="ion-arrow-left-c"></i></button>
                        <button type="button" class="btn btn-outline btn-default"><i class="ion-arrow-right-c"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="email-single">
        <h3 class="fw-400">[ThemeForest] New comment on "Sigma - Responsive Web App Kit"</h3>
        <p class="drop-cap">Scelerisque lobortis arcu torquent donec duis. Mi vestibulum convallis habitant, feugiat dictumst aenean dui morbi porta justo. Lobortis ullamcorper sed, cum platea feugiat neque sociosqu nec neque maecenas suspendisse magnis. Rhoncus pretium potenti maecenas? Habitant ad convallis tincidunt curae; neque. Dis aliquam congue fermentum. Torquent fermentum porttitor faucibus sodales arcu, torquent habitasse pharetra integer mus curabitur. Tristique congue netus congue, non facilisis. Posuere vehicula.</p>
        <p><img src="../build/images/backgrounds/01.jpg" alt="" class="img-responsive"></p>
        <p>Lobortis platea habitasse curabitur accumsan suscipit aptent sodales cubilia congue. A mus imperdiet egestas lobortis fusce ullamcorper. Quam placerat, sed lectus sed conubia pharetra congue! Interdum tempor nibh at. Rutrum ante quisque ullamcorper consectetur? Est feugiat cubilia donec id dolor hac nisi posuere dis? Dapibus conubia facilisi porta enim fringilla platea tincidunt. Parturient aliquam fringilla ut egestas pharetra habitasse malesuada egestas cum. Congue tellus praesent sodales mi at. Tortor senectus feugiat blandit rutrum pharetra metus ullamcorper. Tristique, faucibus massa cursus lacinia tristique sociosqu. Cursus rutrum volutpat varius cursus lacinia pellentesque natoque enim phasellus. Metus sodales est posuere.</p>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail"><img src="../build/images/backgrounds/07.jpg" alt="">
                    <div class="text-right caption pb-0">
                        <ul class="list-inline mb-0">
                            <li><a href="#"><i class="ion-share text-success"></i></a></li>
                            <li><a href="#"><i class="ion-heart text-danger"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail"><img src="../build/images/backgrounds/08.jpg" alt="">
                    <div class="text-right caption pb-0">
                        <ul class="list-inline mb-0">
                            <li><a href="#"><i class="ion-share text-success"></i></a></li>
                            <li><a href="#"><i class="ion-heart text-danger"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail"><img src="../build/images/backgrounds/09.jpg" alt="">
                    <div class="text-right caption pb-0">
                        <ul class="list-inline mb-0">
                            <li><a href="#"><i class="ion-share text-success"></i></a></li>
                            <li><a href="#"><i class="ion-heart text-danger"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <textarea id="email-editor"></textarea>
        <div class="text-right">
            <button type="button" class="btn btn-success"><i class="ion-paper-airplane mr-5"></i> Send</button>
            <button type="button" class="btn btn-default"><i class="ion-trash-b mr-5"></i> Cancel</button>
        </div>
    </div>
@endsection
