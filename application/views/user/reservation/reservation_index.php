<section class="section contact-section" id="next">
    <div class="container">
        <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <?php if (validation_errors()): ?>
                    <div class="alert alert-danger">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <!-- Display success message if available -->
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo site_url('reservation/store'); ?>" method="post"
                    class="bg-white p-md-5 p-4 mb-5 border">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="name">Full Name</label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control" name="phone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                            <input type="date" class="form-control" name="checkin_date">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                            <input type="date" class="form-control" name="checkout_date">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="adults" class="font-weight-bold text-black">Adults</label>
                            <input type="number" id="adults" name="adults" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="children" class="font-weight-bold text-black">Children</label>
                            <input type="number" id="children" name="children" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="rooms">Type of Rooms</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="rooms" class="form-control">
                                    <option value="" disabled>Choose Room</option>
                                    <option value="Superior Room">Superior Room</option>
                                    <option value="Deluxe Room">Deluxe Room</option>
                                    <option value="Suite Room">Suite Room</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="number_rooms">Number of Rooms</label>
                            <input type="number" id="number_rooms" name="number_rooms" class="form-control">
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="message">Notes</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <!-- <input type="submit" value="Reserve Now"
                                class="btn btn-primary text-white py-3 px-5 font-weight-bold"> -->
                            <button type="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Reserve
                                Now</button>
                        </div>
                    </div>
                    <!-- <button type="submit">simpan</button> -->
                </form>

            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-10 ml-auto contact-info">
                        <p><span class="d-block">Address:</span> <span class="text-black"> Jl. C. Simanjuntak GK V No.80
                                Terban Gondokusuman Kota Yogyakarta
                                Daerah Istimewa Yogyakarta 55223
                                Indonesia</span></p>
                        <p><span class="d-block">Phone:</span> <span class="text-black"> (+62) 274 544 551</span></p>
                        <p><span class="d-block">Email:</span> <span class="text-black"> marketing@density.co.id</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>