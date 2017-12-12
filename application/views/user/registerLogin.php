<div id="all">

       <div id="content">
           <div class="container">

               <div class="col-md-12">

                   <ul class="breadcrumb">
                       <li><a href="#">Home</a>
                       </li>
                       <li>New account / Sign in</li>
                   </ul>

               </div>

               <div class="col-md-6">
                   <div class="box">
                       <h1>New account</h1>

                       <p class="lead">Not our registered customer yet?</p>
                       <p>With registration with us all your cake needs will be solved with ease !</p>
                       <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                       <hr>

                       <form action="<?php site_url('register'); ?>" method="post">
                           <div class="form-group">
                               <label for="name">Nama</label>
                               <input type="text" class="form-control" id="nama" name="nama">
                           </div>
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="text" class="form-control" id="email" name="email">
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" id="password" name="password">
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                           </div>
                       </form>
                   </div>
               </div>

               <div class="col-md-6">
                   <div class="box">
                       <h1>Login</h1>

                       <p class="lead">Already our customer?</p>
                       <p class="text-muted">Good job</p>

                       <hr>

                       <form action="<?php echo site_url('login'); ?>" method="post">
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="text" class="form-control" id="emailUser" name='emailUser'>
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" id="passwordUser" name='passwordUser'>
                           </div>
                           <div class="text-center">
                               <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                           </div>
                       </form>
                   </div>
               </div>


           </div>
           <!-- /.container -->
       </div>
       <!-- /#content -->
