<?php $this->load->view('user/includes/headlinks'); ?>
<?php $this->load->view('user/includes/header');  ?>
<title> Register | Stimul Education & Consulting</title>
<!-- ***** Header Area End ***** -->

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h6>Get all details</h6> -->
                <h2>Qeydiyyat!</h2>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" style="padding-top: 100px ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="<?php echo base_url('reguest_act'); ?>" method="post">
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success">
                                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Qeydiyyat!</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Adınız*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="surname" type="text" id="name" placeholder="Soyadınız*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mailiniz*">
                                    </fieldset>
                                </div>

                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Əlaqə nömrəniz*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Müraciət etdiyiniz sahə*" required="">
                                    </fieldset>
                                </div>

                                <div class="col-lg-4 ">
                                    <fieldset>
                                        <select class="myselect1" name="select" id="select">
                                            <option value="">
                                                <h5>Tədrisin növü*</h5>
                                            </option>
                                            <option value="private">Fərdi</option>
                                            <option value="closed">Qapalı (2 nəfər)</option>
                                            <option value="group">Qrup (2-5 nəfər)</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Əlavə qeyd..."></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Göndərin</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php $this->load->view('user/includes/footer'); ?>
</section>
<?php $this->load->view('user/includes/scriptslink'); ?>