@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header " >
                        <h1>this section is about the website</h1><br>
                        <div><ul>
                                <li>first you have to insert the first admin in the database (or run (php artisan db:seed)
                                    and it will create the first admin with the email: Admin@ehb.be , and password: 123456 )  .</li>
                                <li>only the first admin with id=1 can add other admins or
                                    remove them .</li>
                                <li>the other admins can not add/remove other admins.</li>
                                <li>all the admin can add/edit/remove News/Sessies items .</li>
                                <li>click on the All news/sessies button to see All news/sessies items.</li>
                                <li>click on the news/sessie item to see the details and to edit/remove it.</li>
                                <li>the guests can see the news/session items and click on a news/session to view the details .</li>
                                <li>guests and admins can send contact form.</li>
                                <li><span style="color: red">Note:  </span> you have to delet the (;) before the (;extension=gd) in the php.ini file for the GD Library to work (check the first link)</li>

                            </ul>

                        </div>

                        <p>the most links i used</p>
                        <a href="https://stackoverflow.com/questions/39990516/laravel-intervention-image-gd-library-extension/39990560">Laravel Intervention Image GD library extension      </a><br>

                        <a href="https://stackoverflow.com/questions/33939393/failed-to-authenticate-on-smtp-server-error-using-gmail"> Mailstrap probleem     </a><br>
                        <a href="https://getbootstrap.com/docs/4.0/components/forms/">Forms bootstrap      </a><br>
                        <a href="https://www.youtube.com/watch?v=h0EwH5Jjctk&ab_channel=AndreMadarangAndreMadarang"> resize image     </a><br>
                        <a href="https://stackoverflow.com/questions/31539727/laravel-password-validation-rule"> Password validation</a><br>
                        <a href="https://laravel.com/docs/5.1/controllers#restful-resource-controllers">Manage Route and Controllers      </a><br>
                        <a href="https://stackoverflow.com/questions/24613565/get-all-the-users-except-current-logged-in-user-in-laravel-eloquent">Manage  Users    </a><br>
                        <a href="https://laravel.com/docs/8.x/controllers"> Manage Controllers     </a><br>
                        <a href="https://laravel.com/docs/8.x/redirects"> HTTP Redirects     </a><br>
                        <a href="https://ehb.instructuremedia.com/embed/edeb8a9e-3e8f-4af3-85f9-8be5ae754e7d">  GestBook example    </a><br>
                        <a href="https://laravel.com/docs/8.x/seeding">Seeding</a><br>
                        <a href="https://www.w3schools.com/howto/howto_css_contact_form.asp">contact form</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
