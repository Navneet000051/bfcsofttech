<?php
include('include/header.php');
?>

<div class="web-page contact-page get-pro">
    <section class="bfc-contact-hero">
        <div class="container px-0">
            <div class="row justify-content-around py-5 align-items-stretch xs-column-reverse">
                <div class="col-md-6 py-4 align-self-center jump-banner-bfcsoftech">
                    <div class="techUse-title ">
                        <h1 class="text-white">Get Proposal </h1>
                    </div>
                    <p class="text-white">Want to take your business to the next level? Talk to our experts, helping us diagnose your specific needs, so we can curate a solution tailored keeping in mind your business objectives.</p>

                </div>
                <div class="col-md-4">
                    <img src="assets/img/softtech-folder/proposal.webp" alt="" srcset="" class="img-fluid jump-image-bfcsofttech" />
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light-blue py-5">
        <div class="container box1 input-s">
            <div class="row align-items-stretch ">
                <div class="col-md-12 text-center pb-4">
                    <p class="proposal">Please provide the request details <span class="sub-color">  and our team will filter results </span> and will get back to you.</p>
                </div>
                <div class="col-md-5 align-self-center">

                    <img src="assets/img/softtech-folder/Checklist.webp" alt="" srcset="" class="img-fluid" />

                </div>
                <div class="col-md-7 align-self-center">

                    <div class="cont-s">
                        <div class="brand-logo"><img src="assets/img/logo-removebg-preview.webp" alt="" class="img-fluid pt-1 pl-1" /></div>
                        <form class="inputs" onSubmit={Submit}>
                            <div class="row">
                                <div class="form-group col-md-6 py-3">
                                    <label htmlFor="name">Name <span>*</span></label>
                                    <input type="text" name="Name" placeholder="Your Name" value="" />
                                    <small class="text-danger pull-left"></small>

                                </div>

                                <div class="form-group col-md-6 py-3">
                                    <label htmlFor="email">EMAIL <span>*</span></label>
                                    <input type="email" name="Email" placeholder="Your Email" value="" />
                                    <small class="text-danger pull-left"></small>

                                </div>
                                <div class="form-group col-md-6 py-3">
                                    <label htmlFor="mobile">Mobile no<span>*</span></label>
                                    <input type="text" name="Mobile" placeholder="Mobile no" value="" />
                                    <small class="text-danger pull-left"></small>

                                </div>
                                <div class="form-group col-md-6 py-3">
                                    <label htmlFor="city">City <span>*</span></label>
                                    <input type="text" name="City" placeholder="City" value="" />
                                    <small class="text-danger pull-left"></small>

                                </div>

                                <div class="form-group col-md-12 py-3">
                                    <label>Anything else you want to inform us? <span>*</span></label>
                                    <textarea name="InformUs" id="" cols="30" rows="3" value="" placeholder="Type here...."></textarea>
                                    <small class="text-danger pull-left"></small>

                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btnc default-btn border-0 ">SUBMIT</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- <section class="">
        <div class="container px-0">
            <div class="row  pb-5 align-items-stretch">
                <div class="col-md-12 py-4 align-self-center">
                    <div class="techUse-title text-center">
                        <h1>Google <span class="sub-color">Reviews</span></h1>
                        <p class="short-desc">Google rating score:4.8 of 5,based on 112 reviews.</p>
                        <div class="reviews">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>

                </div>
                <div class="testimonial-box-container">

                    <div class="testimonial-box">

                        <div class="box-top">

                            <div class="profile">

                                <div class="profile-img">
                                    <img src="assets/img/softtech-folder/user.png" alt="" />
                                </div>

                                <div class="name-user">
                                    <strong>Liam mendes</strong>
                                    <span>@liammendes</span>
                                </div>
                            </div>

                            <div class="reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                        </div>
                    </div>

                    <div class="testimonial-box">

                        <div class="box-top">

                            <div class="profile">

                                <div class="profile-img">
                                    <img src="assets/img/softtech-folder/user.png" alt="" />
                                </div>

                                <div class="name-user">
                                    <strong>Noah Wood</strong>
                                    <span>@noahwood</span>
                                </div>
                            </div>

                            <div class="reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                        </div>
                    </div>

                    <div class="testimonial-box">

                        <div class="box-top">

                            <div class="profile">

                                <div class="profile-img">
                                    <img src="assets/img/softtech-folder/user.png" alt="" />
                                </div>

                                <div class="name-user">
                                    <strong>Oliver Queen</strong>
                                    <span>@oliverqueen</span>
                                </div>
                            </div>

                            <div class="reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                        </div>
                    </div>

                    <div class="testimonial-box">

                        <div class="box-top">

                            <div class="profile">

                                <div class="profile-img">
                                    <img src="assets/img/softtech-folder/user.png" alt="" />
                                </div>

                                <div class="name-user">
                                    <strong>Barry Allen</strong>
                                    <span>@barryallen</span>
                                </div>
                            </div>

                            <div class="reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>

                        <div class="client-comment">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section> 
    <section class="">

        <Modal show={show} onHide={()=> setShow(false)} centered class="animate__animated animate__zoomIn animate__faster allset">
            <Modal.Body class="text-center">

                <h3 class="text-successc fw-500 py-3 text-poppins"> Thank You For Taking The First Good Step Towards Business Growth.!!</h3>
                <p class="text-black text-poppins">
                    We Have Received Your Request. Wait For Our Call And Share The Maximum Details You Have On-Call With Our Expert To Get Better Help.
                </p>
            </Modal.Body>
            <div class="bg-red text-center py-2 order-b">
                <Link to="#" class="text-white font-weight-bold" onClick={()=> setShow(false)}><h4>OK</h4>
                </Link>
            </div>
        </Modal>


    </section> -->


</div>

<?php
include('include/footer.php');
?>