<section class="section" id="apply-loan">

        <div class="container-fluid">

            <div class="row">

                <!-- ***** Contact Form Start ***** -->

                <div class="col-12">
          
                    <div class="contact-form">

                    <div class="col-lg-12">

<h5 class="heading center">Apply For Loan</h5></div> 

<br>   

<br>   

                        <form id="contact" action="insert_afl.php" method="POST">

                            <div class="row">

                                <div class="col-md-6 col-sm-12 ">

                                    <fieldset>

                                        <input name="name" type="text" id="name" name="name" placeholder="Full Name" required

                                            class="contact-field">

                                    </fieldset>

                                </div>
                                <div class="col-md-6 col-sm-12">

                                    <fieldset>

                                        <input name="phone" type="number" id="phone" placeholder="Phone" required

                                            class="contact-field">

                                    </fieldset>

                                </div>

                                <div class="col-md-6 col-sm-12">

                                    <fieldset>

                                        <input name="email" type="mail" id="email" name='email' placeholder="Email Id" required

                                            class="contact-field">

                                    </fieldset>

                                </div>

                                <div class="col-md-6 col-sm-12">

                                    <fieldset>

                                        <input name="city" type="text" id="city" name="city" placeholder="City" required

                                            class="contact-field">

                                    </fieldset>

                                </div>

                                <div class="col-md-6 col-sm-12">

                                    <fieldset>

                                        <input name="amount" type="number" id="amount" name="amount" placeholder="Amount" required

                                            class="contact-field">

                                    </fieldset>

                                </div>

                            

                                <div class="col-md-6 col-sm-12">

                                    <fieldset>


                                        <select class="contact-field" name="loan_type" required="required">

                        <option value="" disabled="" selected="">Select Your Loan</option>

                        <option value="Personal Loan">Personal Loan</option>

                        <option value="Business Loan">Business Loan</option>

                        <option value="Home Loan">Home Loan</option>

                        <option value="Loan against property">Loan against property</option>

                    </select>

                                    </fieldset>

                                </div>

                                

                                <div class="col-lg-12">

                                    <fieldset>

                                        <button type="submit" id="form-submit" class="main-button">submit</button>

                                    </fieldset>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- ***** Contact Form End ***** -->

            </div>

        </div>

    </section>