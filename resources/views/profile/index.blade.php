@extends ('includes.master')

@section('content')

        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="Dashbord">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi,{{auth()->user()->name}}</h2>
            <p class="section-lead">
             Selamat Datang Di Dashboard WEB-ASURANSI
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="../assets/img/avatar/Admin.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                     
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Email</div>
                        <div class="profile-widget-item-value"> {{auth()->user()->email}}</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">ID ONLINE</div>
                        <div class="profile-widget-item-value">  {{auth()->user()->id}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{auth()->user()->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    {{auth()->user()->name}} berwarganegaraan <b>Indonesia</b>,disini {{auth()->user()->name}} masuk menjadi Admin,Silahkan Folow Akun Kami<b>'{{auth()->user()->name}}'</b>.
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">ADMIN ,{{auth()->user()->name}} On</div>
                  </div>
                </div>
              </div>
            <!--  <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Maman" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="ujang@maman.com" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group mb-0 col-12">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                              <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                              <div class="text-muted form-text">
                                You will get new information about products, offers and promotions
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
        
          
         
        
          
          <div class="col-lg-4 text-center mb-5">
            <img src="asethome/img/dms.webp" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>{{auth()->user()->name}}</h4>
            <span class="d-block mb-3">ADMIN <u>DMS-NEWS</u></span>
            <p>Jujur Dalam Bekerja!</p>
          </div>
          
         <!-- <div class="col-lg-4 text-center mb-5">
            <img src="asethome/img/person-4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="asethome/img/person-5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="asethome/img/person-6.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div> -->
        </div>
      </div>
      
        </section>
@endsection